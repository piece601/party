<?php

class Welcometext_model extends MY_Model {
	protected $table = 'welcome_text';
	protected $primaryKey = 'id';

	public function __construct()
	{
		parent::__construct();
	}
}