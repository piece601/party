<?php

class Contact extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');
	}

	public function index()
	{
		$query = $this->contact_model->select_data(1);
		$navlists = [
			'' => '首頁',
			'/' => $query->title
		];
		$this->load->view('contact/index', compact('query', 'navlists'));
		return true;
	}

	public function edit()
	{
		$query = $this->contact_model->select_data(1);
		$navlists = [
			'' => '首頁',
			'contact' => $query->title,
			'company/edit' => '編輯'
		];
		if ( ! $data = $this->input->post() ) {
			$this->load->view('contact/edit', compact('query', 'navlists'));
			return true;
		}
		$data['id'] = 1;
		$this->contact_model->update_data($data);
		$this->load->view('success', [
			'message' => '更新成功',
			'redirectUrl' => 'contact'
		]);
		return true;
	}

}