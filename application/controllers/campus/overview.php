<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Overview extends CI_Controller {

	/**
	 * Controller to load the campus page
	 */
	public function index()
	{
		//loads the main view if the main page is not loaded into the view.
		$this->load->view('main');
	}

	public function overviewPage()
	{
		//load the campus page.
		$this->load->view('campus');
	}
}

/* End of file campus.php */
/* Location: ./application/controllers/campus.php */