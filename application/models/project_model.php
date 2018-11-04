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

	public function user_all_projects($userid)
	{
		$this->db->where('project_user_id', $userid);
		$query = $this->db->get('tbl_projects');
		return $query->result();

	}

	public function create_project($data)
	{
        $query = $this->db->insert('tbl_projects', $data);
		return $query;
	}

	public function get_project_info($project_id)
	{
		$this->db->where('id', $project_id);
		$query = $this->db->get('tbl_projects');
		return $query->row();
	}

	public function edit_project($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_projects', $data);
        return true;
	}

	public function delete_project($project_id)
	{
		$this->db->where('id', $project_id);
		$this->db->delete('tbl_projects');
        return true;
	}
}