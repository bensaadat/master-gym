<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Notifications {

  /**
   * Table Name for notifications
   * @var string 
   */
  private $notificationTable;

  /**
   * Notification Sender ID
   * @var int 
   */
  private $userId = 0;

  /**
   * Codigniter Instence
   * @var object instance 
   */
  private $ci;

  /**
   * Table Name for user notifications
   * @var string 
   */
  private $notificationUserTable;

  /**
	 * A lang key with informations about this notification.
	 * Placeholder values (%s) are supported
   * @var string 
   */
	private $comment = '';
	
	/**
	 * Comment placeholders values
	 * @var array
	 */
	private $args = [];

  /**
   * Who will receive the notification
   * @var int|Array
   */
  private $target      = 0;
  private $only_unread = 0;

  /**
   * Notification ID
   * @var int 
   */
  private $id = 0;

  /**
   * per page limit
   * @var int 
   */
  private $perpage_limit = 0;

  /**
   * Page number to show notification
   * @var int 
   */
  private $page_offset = 0;
  private $error;

  public function __construct() {
    $this->ci = &get_instance();
    $this->ci->load->database();
    $this->config();
  }

  public function config($new_options = []) {

    $this->ci->config->load('notifications', TRUE);
    $options = $this->ci->config->item('notifications');
    $options = array_merge($options, $new_options);


    $this->notificationTable     = $options['notification_table'];
    $this->notificationUserTable = $options['notification_read_tracking_table'];
    $this->perpage_limit         = $options['per_page'];
    $this->target                = $options['default_target'];
    $this->userId                = $options['default_sender'];
    $this->comment               = $options['default_comment'];
  }

  /**
   * Set UserId
   * @param int $userid
   * @return $this
   */
  public function user($userid) {
    $this->userId = $userid;
    return $this;
  }

  public function flush() {
		$this->args = [];
    $this->comment = '';
    $this->id      = 0;
    return $this;
  }

  /**
   * Set comment
   * @param string $comment
   * @return $this
   */
  public function comment($comment) {
    $this->comment = $comment;
    return $this;
	}
	
	/**
	 * Set comment placeholders values
	 * @param array $args
	 * @return $this
	 */
	public function args($args = []) {
		$this->args = $args;
		return $this;
	}

  /**
   * Set Notification Id
   * @param int $id
   * @return $this
   */
  public function id($id) {
    $this->id = $id;
    return $this;
  }

  /**
   * Set Notified user id or ids
   * @param int|array $notified_ids
   * @return $this
   */
  public function notify($notified_ids = 0) {
		if ($notified_ids)
		{
			$this->target = $notified_ids;
		}

		if ($this->id) 
		{
			$data = array();
			
      if (is_array(($this->target))) {
				foreach ($this->target as $value)
				{
          $data[] = array(
            "notification_id" => $this->id,
            "user_id"         => $value,
          );
				}
				
        $this->ci->db->insert_batch($this->notificationUserTable, $data);
      }
			else
			{
        $data = array(
          "notification_id" => $this->id,
          "user_id"         => $this->target,
				);
        $this->ci->db->insert($this->notificationUserTable, $data);
      }
    }
  }

  /**
   * Set User is already viewed
   * @param int|array $notified_ids
   * @return $this
   */
  public function unread() {
    $this->only_unread = 1;
    return $this;
  }

  /**
   * Get Notification data
   */
  public function get() {
		$this->ci->db->select("{$this->notificationTable}.*, {$this->notificationUserTable}.read_at, first_name, last_name");
    $this->ci->db->from($this->notificationUserTable);
    $this->ci->db->join($this->notificationTable, "{$this->notificationUserTable}.notification_id = {$this->notificationTable}.id");
    $this->ci->db->join("goerp_users", "goerp_users.id = {$this->notificationTable}.user_id");
    $this->_querybuilder();
		$notifications = $this->ci->db->get()->result();
		
		foreach ($notifications as $notification)
		{
			$notification->comment = sprintf( $this->ci->lang->line( explode(';', $notification->comment)[0]), ...explode(',', preg_replace('/.+;/', '', $notification->comment) ) );
		}

    return $notifications;
  }

  /**
   * Add Notification to Database
   */
  public function add() {
		if ($this->userId)
		{
      $data['user_id'] = $this->userId;
		}

		if ($this->comment)
		{
      $data['comment'] = $this->comment . ';' . implode(',', $this->args);
		}

    $this->ci->db->insert($this->notificationTable, $data);
		$this->id = $this->ci->db->insert_id();
    return $this;
  }

  /**
   * Update mark as read
   */
  public function mark_as_read() {
    if ($this->userId)
      $this->ci->db->where('user_id', $this->userId);
    if ($this->id)
      $this->ci->db->where('notification_id', $this->id);

    $this->ci->db->update($this->notificationUserTable, array("read_at" => date("Y:m:d H:i:s", time())));
  }

  /**
   * Update mark as un-read
   */
  public function mark_as_unread() {
		if ($this->userId)
		{
      $this->ci->db->where('user_id', $this->userId);
		}
		if ($this->id)
		{
      $this->ci->db->where('notification_id', $this->id);
		}

    $this->ci->db->update($this->notificationUserTable, array("read_at" => NULL));
  }

  /**
   * Set Pagination
   * @param int $offset
   * @param int $limit
   * @return $this
   */
  public function page($offset, $limit = 0) {
		if ($limit)
		{
      $this->perpage_limit = $limit;
		}

    $this->page_offset   = $offset-1;
		
		return $this;
  }

  public function error() {
    return $this->error;
  }

  private function _querybuilder() {
		if ($this->comment)
		{
      $this->ci->db->where("{$this->notificationTable}.comment", $this->comment);
		}
		if ($this->userId) 
		{
      $this->ci->db->where("{$this->notificationUserTable}.user_id", $this->userId);
    }
		if ($this->only_unread)
		{
      $this->ci->db->where("{$this->notificationUserTable}.read_at", NULL);
		}
		if ($this->id)
		{
      $this->ci->db->where("{$this->notificationUserTable}.notification_id", $this->id);
		}
		
		$this->ci->db->order_by("{$this->notificationTable}.created_at", 'desc');

		if ($this->perpage_limit)
		{
      $this->ci->db->limit( $this->perpage_limit, ($this->perpage_limit * $this->page_offset));
		}
  }

}
