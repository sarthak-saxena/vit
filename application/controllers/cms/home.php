<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Welcome controller to show a welcome message to the API directory
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		//check if the user is logged in and role = cts, else redirect to login
		if($this->session->userdata('logged_in') && $this->session->userdata('role')=="cts")
		{
			$this->load->view('cms/navbar');
			$this->load->view('cms/home', array("error"=>''));
			$this->load->view('cms/footer');
		}
		else
			redirect('cms/login');
	}

	public function slider_data()
	{
		//get the data from the database
		$retTableRows = "";
		$i=0;
		$query = $this->db->get('home_slider');
		foreach ($query->result() as $row)
		{
			if($row->selected==1)
				$retTableRows = $retTableRows.
			    				"<tr>"
			    					."<td>".++$i."</td>"
			    					."<td>".$row->title."</td>"
			    					."<td>".$row->description."</td>"
			    					."<td>".$row->url."</td>"
			    					."<td>".$row->img_url."</td>"
			    					."<td>".$row->last_used."</td>"
			    					."<td><input type='checkbox' checked/></td>"
			    					."<td><button class='btn btn-danger' id='".$row->sl_no."' name='".$row->sl_no."'>Remove</button></td>"
			    				."</tr>";
			else
				$retTableRows = $retTableRows.
			    				"<tr>"
			    					."<td>".++$i."</td>"
			    					."<td>".$row->title."</td>"
			    					."<td>".$row->description."</td>"
			    					."<td>".$row->url."</td>"
			    					."<td>".$row->img_url."</td>"
			    					."<td id='lastUsd".$row->sl_no."'>".$row->last_used."</td>"
			    					."<td><input type='checkbox'/></td>"
			    					."<td><button class='btn btn-danger' id='".$row->sl_no."' name='".$row->sl_no."'>Remove</button></td>"
			    				."</tr>";
		}

		echo $retTableRows;
	}

	function slider_upload()
	{
		$title = $this->input->post("slider_title");
		$desc = $this->input->post("slider_desc");
		$link = $this->input->post("slider_link");

		if($title==""||$desc==""&&$link=="")
		{
			$error = array('error' => "Please enter all the information before continuing");
			$this->load->view('cms/navbar');
			$this->load->view('cms/home', $error);
			$this->load->view('cms/footer');
			return;
		}

		$config['upload_path'] = './images/homeslider';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '200';
		$config['max_width']  = '1366';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('slider_img'))
		{
			//return to home with the error message
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('cms/navbar');
			$this->load->view('cms/home', $error);
			$this->load->view('cms/footer');
		}
		else
		{
			//get array of the uploaded data to acquire the full path of the uploaded image.
			$uploadData = $this->upload->data();
			//upload the data to database.
			$data = array(
				"title"=>$title,
				"description"=>$desc,
				"url"=>$link,
				"img_url"=>$uploadData['full_path']
				);
			$this->db->insert('home_slider', $data);
			//return to home with the success message
			$this->load->view('cms/navbar');
			$this->load->view('cms/home', array('error'=>'File successfully uploaded'));
			$this->load->view('cms/footer');
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/cms/welcome.php */