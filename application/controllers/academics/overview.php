<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Overview extends CI_Controller {

	/**
	 * Controller to load the academics page
	 */
	public function index()
	{
		//loads the main view if the main page is not loaded into the view.
		$this->load->view('main');
	}

	public function overviewPage()
	{
		//load the academics page.
		$this->load->view('academics');
	}
}

/* End of file academics.php */
/* Location: ./application/controllers/academics/overview.php */