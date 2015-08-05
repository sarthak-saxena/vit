<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Welcome controller to show a welcome message to the API directory
	 */
	public function index()
	{
		$this->load->view('cms/welcome');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/cms/welcome.php */