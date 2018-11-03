<?php

class Project_model extends CI_Model
{
	
	public function get_projects()
	{
		$query = $this->db->get('tbl_projects');
		return $query->result();
	}

	public function project($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_projects');
		return $query->row();

	}
}