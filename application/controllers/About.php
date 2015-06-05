<?php

class About extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['about_model']);
	}

	// 首頁
	public function index()
	{
		// 撈出關於我們
		$query = $this->about_model->select_data(1);
		$this->load->view('about/index', [
			'query' => $query
		]);
		return true;
	}

	// 編輯
	public function edit()
	{
		$query = $this->about_model->select_data(1);
		if ( ! $data = $this->input->post() ) {
			$this->load->view('about/edit', [
				'query' => $query
			]);
			return true;
		}
		$data['id'] = 1;
		$this->about_model->update_data($data);
		$this->load->view('success', [
			'message' => '更新成功',
			'redirectUrl' => 'about'
		]);
		return true;
	}

}