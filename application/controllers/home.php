<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Controller to the home layout
	 */
	public function index()
	{
		$data = $this->getContent();
		$this->load->view('home', $data);
	}

	private function getContent()
	{
		//function to fectch data from database and return to the index function in form or array.
		$data = array();

		//database query goes here..

		//Data set for Slider...
		$data['slider1']['image'] = 'images/slider1.jpg';
		$data['slider1']['heading'] = 'Heading slider 1';
		$data['slider1']['desc'] = "A breif description about the heading of slider 1. It is just a testing text like lorum ipsum.";
		$data['slider1']['url'] = '#';
		$data['slider2']['image'] = 'images/slider2.jpg';
		$data['slider2']['heading'] = "Heading slider 2";
		$data['slider2']['desc'] = "A breif description about the heading of slider 1. It is just a testing text like lorum ipsum.";
		$data['slider2']['url'] = "#";
		$data['slider3']['image'] = 'images/slider3.jpg';
		$data['slider3']['heading'] = "Heading slider 3";
		$data['slider3']['desc'] = "A breif description about the heading of slider 1. It is just a testing text like lorum ipsum.";
		$data['slider3']['url'] = "#";
		$data['slider4']['image'] = 'images/slider4.jpg';
		$data['slider4']['heading'] = "Heading slider 4";
		$data['slider4']['desc'] = "A breif description about the heading of slider 1. It is just a testing text like lorum ipsum.";
		$data['slider4']['url'] = "#";
		//End of dataset for slider...

		//Dataset for News...
		$data['news1']['image'] = "images/homenews/news1.jpg";
		$data['news1']['title'] = "Computer Science Engineering most preferred";
		$data['news1']['desc'] = "This is a dummy description of the news section covering this section as a dumy data";
		$data['news1']['url'] = 'http://www.thehindu.com/news/national/tamil-nadu/computer-science-engineering-most-preferred/article7196498.ece';
		$data['news2']['image'] = "images/homenews/news2.jpg";
		$data['news2']['title'] = "University brain behind 'Save the Internet' campaign";
		$data['news2']['desc'] = "This is a dummy description of the news section covering this section as a dumy data";
		$data['news2']['url'] = ' http://yourstory.com/2015/04/techie-tuesdays-karthik-balakrishnan/';
		$data['news3']['image'] = "images/homenews/news3.jpg";
		$data['news3']['title'] = "Team Jaabaz in SAE International magazine - Momentum";
		$data['news3']['desc'] = "This is a dummy description of the news section covering this section as a dumy data";
		$data['news3']['url'] = '#';
		$data['news4']['image'] = "images/homenews/news4.jpg";
		$data['news4']['title'] = "Plea for more powers to autonomous colleges";
		$data['news4']['desc'] = "This is a dummy description of the news section covering this section as a dumy data";
		$data['news4']['url'] = '#';
		//End of dataset for news...

		//Dataser for infocus...
		$data['infocus1']['image'] = "images/homenews/news1.jpg";
		$data['infocus1']['title'] = "Computer Science Engineering most preferred";
		$data['infocus1']['desc'] = "This is a dummy description of the news section covering this section as a dumy data";
		$data['infocus1']['url'] = 'http://www.thehindu.com/news/national/tamil-nadu/computer-science-engineering-most-preferred/article7196498.ece';
		$data['infocus2']['image'] = "images/homenews/news2.jpg";
		$data['infocus2']['title'] = "University brain behind 'Save the Internet' campaign";
		$data['infocus2']['desc'] = "This is a dummy description of the news section covering this section as a dumy data";
		$data['infocus2']['url'] = ' http://yourstory.com/2015/04/techie-tuesdays-karthik-balakrishnan/';
		$data['infocus3']['image'] = "images/homenews/news3.jpg";
		$data['infocus3']['title'] = "Team Jaabaz in SAE International magazine - Momentum";
		$data['infocus3']['desc'] = "This is a dummy description of the news section covering this section as a dumy data";
		$data['infocus3']['url'] = '#';
		//End of dataser for infocus..

		//Dataset for events...
		//End of dataset for events...

		return $data;
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */