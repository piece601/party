<?php

class Basic extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['logo_model', 'background_model', 'footer_model']);
	}

	public function index()
	{
		$navlists = [
			'' => '首頁',
			'basic' => '基礎設定',
		];
		$logo = $this->logo_model->select_data(1);
		$background = $this->background_model->select_data(1);
		$footer = $this->footer_model->select_data(1);
		$this->load->view('basic/index', compact('logo', 'background', 'footer', 'navlists'));
		return true;
	}

	public function edit_logo()
	{
		$query = $this->logo_model->select_data(1);
		$navlists = [
			'' => '首頁',
			'basic' => '基礎設定',
			'basic/edit_logo' => '編輯Logo'
		];
		if ( empty($_FILES['userfile']['size']) ) { // 無檔案上傳
			$this->load->view('basic/edit_logo', compact('query', 'navlists'));
			return true;
		}
		@unlink($query->path); // 刪除原有檔案
		$data['path'] = $this->singleUploading()['path'];
		$data['id'] = 1;
		$this->logo_model->update_data($data);
		$this->load->view('success', [
			'message' => '更新成功',
			'redirectUrl' => 'basic'
		]);
		return true;
	}

	public function edit_background()
	{
		$query = $this->background_model->select_data(1);
		$navlists = [
			'' => '首頁',
			'basic' => '基礎設定',
			'basic/edit_background' => '編輯背景'
		];
		if ( empty($_FILES['userfile']['size']) ) { // 無檔案上傳
			$this->load->view('basic/edit_background', compact('query', 'navlists'));
			return true;
		}
		@unlink($query->path); // 刪除原有檔案
		$data['path'] = $this->singleUploading()['path'];
		$data['id'] = 1;
		$this->background_model->update_data($data);
		$this->load->view('success', [
			'message' => '更新成功',
			'redirectUrl' => 'basic'
		]);
		return true;
	}

	public function delete_background()
	{
		$query = $this->background_model->select_data(1);
		@unlink($query->path); // 刪除原有檔案
		$data['path'] = '';
		$data['id'] = 1;
		$this->background_model->update_data($data);
		$this->load->view('success', [
			'message' => '刪除成功',
			'redirectUrl' => 'basic'
		]);
		return true;
	}

	public function edit_footer()
	{
		$query = $this->footer_model->select_data(1);
		$navlists = [
			'' => '首頁',
			'basic' => '基礎設定',
			'basic/edit_footer' => '編輯站底資訊'
		];
		if ( ! $data = $this->input->post() ) {
			$this->load->view('basic/edit_footer', compact('query', 'navlists'));
			return true;
		}
		$data['id'] = 1;
		$this->footer_model->update_data($data);
		$this->load->view('success', [
			'message' => '更新成功',
			'redirectUrl' => 'basic'
		]);
		return true;
	}

}