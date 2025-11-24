<?php
class Blog_model extends CI_Model
{
	public function getLimitBlogs()
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

	public function getBlogs($limit, $offset)
	{
		// TODO: Menggunakan filter 'LIKE'
		$filter = $this->input->get('find');
		$this->db->like('LOWER(title)', strtolower($filter));

		// TODO: Menggunakan limit untuk mengatur pagination
		$this->db->limit($limit, $offset);

		$this->db->order_by('date', 'desc');
		return $this->db->get('blog');
	}

	public function countAllBlogs()
	{
		// TODO: Menggunakan filter 'LIKE'
		$filter = $this->input->get('find');
		$this->db->like('LOWER(title)', strtolower($filter));
		return $this->db->count_all_results('blog');
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
