<?php 

class User_model extends CI_Model
{
	
	public function login_user($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$result = $this->db->get('tbl_users');

		if ($result->num_rows() == 1) {
			return $result->row();
		}else{
            return false;
		}
	}

	public function create_user()
	{
		$data = [
					'name' => $this->input->post('name'),
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'password' => md5($this->input->post('password'))
				];

		$insert = $this->db->insert('tbl_users', $data);
		return $insert;
	}
}