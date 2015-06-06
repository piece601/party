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
		$this->load->view('company/index', compact('query'));
		return true;
	}

	public function edit()
	{
		$query = $this->company_model->select_data(1);
		if ( ! $data = $this->input->post() ) {
			$this->load->view('company/edit', compact('query'));
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