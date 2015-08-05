<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Welcome controller to show a welcome message to the API directory
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('cms/login');
		$this->load->view('cms/footer');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/cms/welcome.php */