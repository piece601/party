<?php

class Qanda_model extends MY_Model {
	protected $table = 'Qandas';
	protected $primaryKey = 'id';

	public function __construct()
	{
		parent::__construct();
	}
}