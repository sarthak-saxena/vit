<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MotorSportTeams extends CI_Controller {

	/**
	 * Controller to load the campus/motorSportTeams page
	 */
	public function index()
	{
		//loads the main view if the main page is not loaded into the view.
		$this->load->view('main');
	}

	public function motorSportTeamsPage()
	{
		//load the motorSportTeams page.
		$this->load->view('motorSportTeams');
	}
}

/* End of file motorSportTeams.php */
/* Location: ./application/controllers/campus/motorSportTeams.php */