<?php

class Welcome extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['welcomepicture_model', 'welcometext_model', 'welcomeslide_model']);
	}

	public function index()
	{
		$picture = $this->welcomepicture_model->select_data(1);
		$text = $this->welcometext_model->select_data(1);
		$this->load->view('welcome/index', [
			'picture' => $picture,
			'text' => $text
		]);
		return true;
	}

	public function admin()
	{
		$slides = $this->welcomeslide_model->select_all_data('asc');
		$picture = $this->welcomepicture_model->select_data(1);
		$text = $this->welcometext_model->select_data(1);
		$this->load->view('welcome/admin', [
			'slides' => $slides,
			'picture' => $picture,
			'text' => $text
		]);
		return true;
	}	

	public function edit_slide($id = null)
	{
		if ( ! $query = $this->welcomeslide_model->select_data($id) ) {
			$this->load->view('failure', [
				'message' => '查無此資料'
			]);
			return true;
		}

		if ( ! $data['title'] = $this->input->post('title', true)) {
			$this->load->view('welcome/edit_slide', [
				'query' => $query
			]);
			return true;
		}

		if ( ! empty($_FILES['userfile']['size']) ) {
			@unlink($query->path); // 刪除原有檔案
			$data['path'] = $this->singleUploading()['path'];
		}
		
		$data['id'] = $id;
		$this->welcomeslide_model->update_data($data);
		$this->load->view('success', [
			'message' => '更新成功',
			'redirectUrl' => 'welcome/admin'
		]);
		return true;
	}

	public function edit_picture()
	{
		// 撈出圖片
		$query = $this->welcomepicture_model->select_data(1);
		if ( empty($_FILES['userfile']['size']) ) { // 無檔案上傳
			$this->load->view('welcome/edit_picture');
			return true;
		}
		@unlink($query->path); // 刪除原有檔案
		$data['path'] = $this->singleUploading()['path']; // 新的檔案位置
		$data['id'] = 1;
		$this->welcomepicture_model->update_data($data);
		$this->load->view('success', [
			'message' => '更新成功',
			'redirectUrl' => 'welcome/admin'
		]);
		return true;
	}

	public function edit_text()
	{
		// 撈出介紹
		$query = $this->welcometext_model->select_data(1);
		if ( ! $data = $this->input->post() ) {
			$this->load->view('welcome/edit_text', [
				'query' => $query
			]);
			return true;
		}
		$data['id'] = 1;
		$this->welcometext_model->update_data($data);
		$this->load->view('success', [
			'message' => '更新成功',
			'redirectUrl' => 'welcome/admin'
		]);
		return true;
	}

}