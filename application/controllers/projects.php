<?php 

class Projects extends CI_Controller
{
	public function __construct()
	{
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
        	$this->session->set_flashdata('no_access', 'Sorry, you are not allowed to visit this page.');
        	redirect('home/index');
        }
	}
	
	public function index()
	{
        $data['projects'] = $this->project_model->get_projects();

		$data['main_view'] = "projects/index";
		$this->load->view('layout/main', $data);
	}

	public function display($project_id)
	{
        $data['projects_data'] = $this->project_model->project($project_id);

		$data['main_view'] = "projects/display";
		$this->load->view('layout/main', $data);
	}
}