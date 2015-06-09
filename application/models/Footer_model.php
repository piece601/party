<?php

class Footer_model extends MY_Model {
	protected $table = 'footer';
	protected $primaryKey = 'id';

	public function __construct()
	{
		parent::__construct();
	}
}