<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leadership extends CI_Controller {

	/**
	 * Controller to load the about/leadership page
	 */
	public function index()
	{
		//loads the main view if the main page is not loaded into the view.
		$this->load->view('main');
	}

	public function leadershipPage()
	{
		//load the leadership page.
		$this->load->view('leadership');
	}
}

/* End of file leadership.php */
/* Location: ./application/controllers/about/leadership.php */