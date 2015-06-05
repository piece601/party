<?php

class Welcomeslide_model extends MY_Model {
	protected $table = 'welcome_slide';
	protected $primaryKey = 'id';

	public function __construct()
	{
		parent::__construct();
	}
}