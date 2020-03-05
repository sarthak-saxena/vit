<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	/**
	 * Controller to load the about page
	 */
	public function index()
	{
		$this->load->view('about');
	}
}

/* End of file about.php */
/* Location: ./application/controllers/about.php */