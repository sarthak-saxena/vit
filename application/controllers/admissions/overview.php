<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Overview extends CI_Controller {

	/**
	 * Controller to load the admissions page
	 */
	public function index()
	{
		//loads the main view if the main page is not loaded into the view.
		$this->load->view('main');
	}

	public function overviewPage()
	{
		//load the admissions page.
		$this->load->view('admissions');
	}
}

/* End of file admissions.php */
/* Location: ./application/controllers/admissions.php */