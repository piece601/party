<?php

class Contact_model extends MY_Model {
	protected $table = 'contacts';
	protected $primaryKey = 'id';

	public function __construct()
	{
		parent::__construct();
	}
}