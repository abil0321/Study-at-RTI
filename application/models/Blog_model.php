<?php
class Blog_model extends CI_Model
{
	public function getBlogs()
	{
		// TODO: Menggunakan select dan from database
		// $this->db->select();
		// $this->db->from('blog');

		// TODO: Menggunakan filter 'LIKE'
		$filter = $this->input->get('find');
		if (!empty($filter)) {
			//! NOTE: Menggunakan LIKE di postgresql akan terkena case sensitive
			// $this->db->like('title', $filter);
			$this->db->like('LOWER(title)', strtolower($filter));
		} else {
			$this->db->limit(7);
		}

		$this->db->order_by('date', 'desc');
		return $this->db->get('blog');
	}

	public function getAllBlogs()
	{
		$filter = $this->input->get('find');
		$this->db->like('LOWER(title)', strtolower($filter));

		$this->db->order_by('date', 'desc');
		return $this->db->get('blog');
	}
	public function getSingleBlog($param, $value)
	{
		$this->db->where($param, $value);
		return $this->db->get('blog');
	}

	public function createBlog($data)
	{
		return $this->db->insert('blog', $data);
	}

	public function updateBlog($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('blog', $data);
		return $this->db->affected_rows();
	}

	public function deleteBlog($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('blog');
		return $this->db->affected_rows();
	}
}
