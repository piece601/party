<?php

class About_model extends MY_Model {
	protected $table = 'abouts';
	protected $primaryKey = 'id';

	public function __construct()
	{
		parent::__construct();
	}
}