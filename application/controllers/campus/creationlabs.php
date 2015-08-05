<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CreationLabs extends CI_Controller {

	/**
	 * Controller to load the cmapus/creationLabs page
	 */
	public function index()
	{
		//loads the main view if the main page is not loaded into the view.
		$this->load->view('main');
	}

	public function creationLabsPage()
	{
		//load the creationLabs page.
		$this->load->view('creationLabs');
	}
}

/* End of file creationLabs.php */
/* Location: ./application/controllers/campus/creationLabs.php */