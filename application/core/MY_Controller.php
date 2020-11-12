<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct()
    {
		parent::__construct();

		$this->load->library('ion_auth');

		if ($this->ion_auth->logged_in())
		{
			$user_lang = $this->ion_auth->user()->row()->lang;

			$this->config->config['language'] = array_search($user_lang, $this->config->config['languages']);
			$this->lang->load(array('ion_auth', 'users', 'side_menu'));
		}
		else
		{
			$this->session->set_userdata('last_page', current_url());
			redirect('auth/login');
		}
	}
}
