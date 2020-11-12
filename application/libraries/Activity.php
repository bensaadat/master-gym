<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Activity logger class
 * 
 * Logs user activities
 */
class Activity
{
	/**
	 * @var string
	 */
	public $table = 'goerp_user_log';

	/**
	 * @var int
	 */
	private $user_id;

	/**
	 * @var string
	 */
	private $user_fullname;

	/**
	 * @var int
	 */
	private $subject_id;

	/**
	 * @var string
	 */
	private $subject_type;

	/**
	 * @var string
	 */
	private $subject_url;

	/**
	 * @var string
	 */
	private $action;

	/**
	 * @var array
	 */
	private $properties;

	public function __construct()
	{
		$this->load->library('ion_auth');

		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			$this->user_id = $user->id;
			$this->user_fullname = $user->first_name . ' ' . $user->last_name;
		}
	}

	/**
	 * Proxy all get requests to the CodeIgniter super-global
	 */
	public function __get($var)
	{
		return get_instance()->{$var};
	}

	/**
	 * Set activity user
	 * 
	 * @param int|FALSE $user_id
	 * @param string|FALSE $user_fullname
	 */
	public function setUser($user_id = FALSE, $user_fullname = FALSE)
	{
		if ($user_id)
		{
			$this->user_id = $user_id;
		}

		if ($user_fullname)
		{
			$this->user_fullname = $user_fullname;
		}
	}

	/**
	 * Set activity subject
	 * 
	 * @param int|NULL $subject_id
	 * @param string|NULL $subject_type
	 * @param string|NULL $subject_url
	 */
	public function setSubject($subject_id = NULL, $subject_type = NULL, $subject_url = NULL)
	{
		$this->subject_id = $subject_id;
		$this->subject_type = $subject_type;
		$this->subject_url = $subject_url;

		return $this;
	}

	/**
	 * Set activity action
	 * 
	 * @param array $action
	 */
	public function setAction($action)
	{
		$this->action = $action;

		return $this;
	}

	/**
	 * Set activity properties
	 * 
	 * @param array $properties
	 */
	public function setProperties($properties)
	{
		$this->properties = json_encode($properties);

		return $this;
	}

	/**
	 * Save the activity to the database
	 */
	public function save()
	{
		$this->db->set('user_id', $this->user_id);
		$this->db->set('user_fullname', $this->user_fullname);
		$this->db->set('subject_id', $this->subject_id);
		$this->db->set('subject_type', $this->subject_type);
		$this->db->set('subject_url', $this->subject_url);
		$this->db->set('action', $this->action);
		$this->db->set('properties', $this->properties);

		$this->subject_id = NULL;
		$this->subject_type = NULL;
		$this->subject_url = NULL;
		$this->properties = array();

		return $this->db->insert($this->table);
	}
}
