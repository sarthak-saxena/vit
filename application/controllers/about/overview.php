<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Overview extends CI_Controller {

	/**
	 * Controller to load the about page
	 */
	public function index()
	{
		//loads the main view if the main page is not loaded into the view.
		$this->load->view('main');
	}

	public function overviewPage()
	{
		//load the about page.
		$this->load->view('about');
	}
}

/* End of file about.php */
/* Location: ./application/controllers/about/overview.php */