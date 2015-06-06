<?php

class Upload_model extends MY_Model {
	protected $table = 'uploads';
	protected $primaryKey = 'id';

	public function __construct()
	{
		parent::__construct();
	}
}