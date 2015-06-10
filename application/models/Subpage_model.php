<?php

class Subpage_model extends MY_Model {
	protected $table = 'sub_page';
	protected $primaryKey = 'sub_id';

	public function __construct()
	{
		parent::__construct();
	}

	public function select_by_pageId($page_id)
	{
		$query = $this->db->get_where($this->table, ['page_id' => $page_id]);
		return $query->result();
	}
}