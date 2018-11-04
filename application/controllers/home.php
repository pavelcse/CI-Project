<?php 

class Home extends CI_Controller
{
	
	public function index()
	{
        if ($this->session->userdata('logged_in')) {
        	$userid = $this->session->userdata('user_id');
        	$data['projects'] = $this->project_model->user_all_projects($userid);
        }

		$data['main_view'] = "home_view";
		$this->load->view('layout/main', $data);
	}
}