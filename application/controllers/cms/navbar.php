<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Navbar extends CI_Controller {

	/**
	 * Welcome controller to show a welcome message to the API directory
	 */
	public function index()
	{
		$this->load->view('navbar_cms');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/cms/welcome.php */