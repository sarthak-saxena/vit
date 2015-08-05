<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ugadmission extends CI_Controller {

	/**
	 * Controller to load the admissions/UGAdmissions page
	 */
	public function index()
	{
		//loads the main view if the main page is not loaded into the view.
		$this->load->view('main');
	}

	public function ugAdmissionPage()
	{
		//load the admissions/UGAdmissions page.
		$this->load->view('ugAdmission');
	}
}

/* End of file ugAdmissions.php */
/* Location: ./application/controllers/admissions/ugAdmission.php */