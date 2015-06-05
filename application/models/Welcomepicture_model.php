<?php

class Welcomepicture_model extends MY_Model {
	protected $table = 'welcome_picture';
	protected $primaryKey = 'id';

	public function __construct()
	{
		parent::__construct();
	}
}