<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Career extends CI_Controller {

	/**
	 * Controller to load the about/career page
	 */
	public function index()
	{
		//loads the main view if the main page is not loaded into the view.
		$this->load->view('main');
	}

	public function careerPage()
	{
		//load the career page.
		$this->load->view('career');
	}
}

/* End of file career.php */
/* Location: ./application/controllers/about/career.php */