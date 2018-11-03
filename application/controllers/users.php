<?php 

class Users extends CI_Controller
{
	public function register()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[tbl_users.email]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|is_unique[tbl_users.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

        if ($this->form_validation->run() == FALSE) {

        	$view['main_view'] = "users/register_view";
		    $this->load->view('layout/main', $view);

        } else {
        	if ($this->user_model->create_user()) {
        		$this->session->set_flashdata('user_register', "User Successfully Registered. Please Login...");
        		redirect('users/register');
        	}
        	
        }
		
	}
	
	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[12]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

	    if ($this->form_validation->run() == FALSE) 
	    {
			$data = ['errors' => validation_errors()];
			$this->session->set_flashdata($data);
			redirect('home');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = $this->user_model->login_user($username, $password);

			if ($data) {
				$user_data = [
					'user_id' => $data->id,
					'username' => $data->username,
					'user_name' => $data->name,
					'logged_in' => true
				];

				
				$this->session->set_userdata( $user_data );
				$this->session->set_flashdata('login_message', '<p class="text-success">You are now logged in</p>');
				//redirect('home/index');

				$view['main_view'] = "admin_view";
		        $this->load->view('layout/main', $view);
			}else{
				$this->session->set_flashdata('login_message', '<p class="text-danger">Sorry, You are not logged in</p>');
				redirect('home/index');
			}

		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home/index');
	}
}