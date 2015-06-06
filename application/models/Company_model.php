<?php

class Company_model extends MY_Model {
	protected $table = 'companys';
	protected $primaryKey = 'id';

	public function __construct()
	{
		parent::__construct();
	}
}