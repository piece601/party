<?php

class Qanda extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['qanda_model']);
	}

	public function index()
	{
		$query = $this->qanda_model->select_data(1);
		$navlists = [
			'' => '首頁',
			'/' => $query->title
		];
		$this->load->view('qanda/index', compact('query', 'navlists'));
		return true;
	}

	public function edit()
	{
		$query = $this->qanda_model->select_data(1);
		$navlists = [
			'' => '首頁',
			'qanda' => $query->title,
			'company/edit' => '編輯'
		];
		if ( ! $data = $this->input->post() ) {
			$this->load->view('qanda/edit', compact('query', 'navlists'));
			return true;
		}
		$data['id'] = 1;
		$this->qanda_model->update_data($data);
		$this->load->view('success', [
			'message' => '更新成功',
			'redirectUrl' => 'qanda'
		]);
		return true;
	}
}