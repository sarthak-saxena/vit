<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Community extends CI_Controller {

	/**
	 * Controller to load the about/community page
	 */
	public function index()
	{
		//loads the main view if the main page is not loaded into the view.
		$this->load->view('main');
	}

	public function communityPage()
	{
		//load the community page.
		$this->load->view('community');
	}
}

/* End of file community.php */
/* Location: ./application/controllers/about/community.php */