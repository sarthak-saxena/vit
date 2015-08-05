<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validate extends CI_Controller {

	/**
	 * Validation controller to validate the user and redirect according to user role
	 */

	public function index()
	{
		//check if the user credentials are correct.

		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('session');

		$this->form_validation->set_rules('userid', 'Username', 'trim|required|xss_clean|callback_validate_from_db');
		//parameters passed are: form_field_name, variable associated to the input, validation checks
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{
			//instead of overritting the form_error, we return only error message as echo.
			echo "error";
		}
		else
		{
			//user credentials are correct, hence find and the role, initiate the session and redirect
			$name = $this->db->where('user_id', $this->input->post("userid"));
			$qry = $this->db->get("users");
			$row = $qry->row_array();
			$name = $row['name'];
			$role = $row['role'];
			$session_data_array = array(
					"uid" => $this->input->post('userid'),
					"name" => "$name",
					"role" => "$role",
					"logged_in" => 1
				);
			$this->session->set_userdata($session_data_array);
			//check the role and redirect to the soecific page.
			//currently only placement is a specific role. In future the same logic can be shifted to switch
			//depending on the number of roles defined.
			if($role=="placement")
				echo 'placement';
			else
				echo 'home';
		}
	}

	function validate_from_db()
	{
		/*$this->load->model("validate_user");

		if($this->validate_user->valid_user())
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('validate', 'Incorrect Username or Password');
			return false;
		}*/

		$this->db->where('user_id', $this->input->post("userid"));
		$this->db->where('password', $this->input->post("password"));
		$qry = $this->db->get("users");
		if($qry->num_rows() == 1)
			return true;
		else
			return false;
	}

}

/* End of file validate.php */
/* Location: ./application/controllers/cms/validate.php */