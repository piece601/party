<?php

class Pageimg_model extends MY_Model {
	protected $table = 'page_image';
	protected $primaryKey = 'img_id';

	public function __construct()
	{
		parent::__construct();
	}

	public function select_by_subId($sub_id)
	{
		$query = $this->db->get_where($this->table, ['sub_id' => $sub_id]);
		return $query->result();
	}
}