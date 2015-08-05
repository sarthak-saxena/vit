<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Overview extends CI_Controller {

	/**
	 * Controller to load the placement page
	 */
	public function index()
	{
		//loads the main view if the main page is not loaded into the view.
		$this->load->view('main');
	}

	public function overviewPage()
	{
		//load the placement page.
		$this->load->view('placement');
	}
}

/* End of file placement.php */
/* Location: ./application/controllers/placement.php */