<?php

class Logo_model extends MY_Model {
	protected $table = 'logo';
	protected $primaryKey = 'id';

	public function __construct()
	{
		parent::__construct();
	}
}