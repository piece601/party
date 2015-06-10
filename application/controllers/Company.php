<?php

class Company extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['company_model']);
	}

	public function index()
	{
		
		$query = $this->company_model->select_data(1);
		$navlists = [
			'' => '首頁',
			'/' => $query->title
		];
		$this->load->view('company/index', compact('query', 'navlists'));
		return true;
	}

	public function edit()
	{
		$query = $this->company_model->select_data(1);
		$navlists = [
			'' => '首頁',
			'company' => $query->title,
			'company/edit' => '編輯'
		];
		if ( ! $data = $this->input->post() ) {
			$this->load->view('company/edit', compact('query', 'navlists'));
			return true;
		}
		$data['id'] = 1;
		$this->company_model->update_data($data);
		$this->load->view('success', [
			'message' => '更新成功',
			'redirectUrl' => 'company'
		]);
		return true;
	}
}