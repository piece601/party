<?php

class Background_model extends MY_Model {
	protected $table = 'background';
	protected $primaryKey = 'id';

	public function __construct()
	{
		parent::__construct();
	}
}