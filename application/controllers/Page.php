<?php

class Page extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['subpage_model', 'pageimg_model', 'welcomeslide_model']);
	}

	public function index($page_id = null)
	{
		$query = $this->subpage_model->select_by_pageId($page_id);
		$navlists =	[
			'' => '首頁',
			'/' => $this->welcomeslide_model->select_data($page_id)->title
		];
		$this->load->view('page/index', [
			'query' => $query,
			'page_id' => $page_id,
			'navlists' => $navlists
		]);
		return true;
	}

	public function create($page_id = null)
	{
		if ($page_id == null) {
			$this->load->view('failure', [
				'message' => '錯誤頁面'
			]);
			return true;
		}
		if ( ! $data = $this->input->post()) {
			$this->load->view('page/create');
			return true;
		}
		if ( ! empty($_FILES['userfile']['size'])) {
			@unlink($query->path); // 刪除原有檔案
			$data['path'] = $this->singleUploading()['path'];
		}
		$data['page_id'] = $page_id;
		$this->subpage_model->insert_data($data);
		$this->load->view('success', [
			'message' => '新增成功',
			'redirectUrl' => 'page/index/'.$page_id
		]);
		return true;
	}

	public function edit($sub_id = null)
	{
		$query = $this->subpage_model->select_data($sub_id);
		$navlists =	[
			'' => '首頁',
			'page/index/'.$query->page_id => $this->welcomeslide_model->select_data($query->page_id)->title,
			'page/edit/'.$sub_id => '編輯 - '.$query->title
			// '/' => $this->welcomeslide_model->select_data($page_id)->title
		];
		if ( ! $data = $this->input->post()) {
			$this->load->view('page/edit', [
				'query' => $query,
				'navlists' => $navlists
			]);
			return true;
		}
		if ( ! empty($_FILES['userfile']['size'])) {
			@unlink($query->path); // 刪除原有檔案
			$data['path'] = $this->singleUploading()['path'];
		}
		$data['sub_id'] = $sub_id;
		$this->subpage_model->update_data($data);
		$this->load->view('success', [
			'message' => '更新成功',
			'redirectUrl' => 'page/index/'.$query->page_id
		]);
		return true;
	}

	public function delete($sub_id = null)
	{
		if ( ! $query = $this->subpage_model->select_data($sub_id) ) {
			$this->load->view('failure', [
				'message' => '查無此資料'
			]);
			return true;
		}
		@unlink($query->path); // 刪除原有檔案
		$this->subpage_model->delete_data($sub_id);
		$this->load->view('success', [
			'message' => '刪除成功',
			'redirectUrl' => 'page/index/'.$query->page_id
		]);		
		return true;
	}

	public function order($page_id = null)
	{
		$query = $this->subpage_model->select_by_pageId($page_id);
		$this->load->view('page/order', [
			'query' => $query,
			'page_id' => $page_id
		]);
		return true;
	}

	public function image($sub_id = null)
	{
		$query = $this->subpage_model->select_data($sub_id);
		$navlists =	[
			'' => '首頁',
			'page/index/'.$query->page_id => $this->welcomeslide_model->select_data($query->page_id)->title,
			'/' => $query->title
			// '/' => $this->welcomeslide_model->select_data($page_id)->title
		];
		$query = $this->pageimg_model->select_by_subId($sub_id);
		$this->load->view('page/image', compact('query', 'sub_id', 'navlists'));
		return true;
	}

	public function create_img($sub_id = null)
	{
		if ( ! $this->subpage_model->select_data($sub_id) ) {
			$this->load->view('failure', [
				'message' => '無法在此新增照片'
			]);
			return true;
		}

		if ( empty($_FILES['userfile']['size']) ) {
			$this->load->view('page/create_img');
			return true;
		}
		$data['sub_id'] = $sub_id;
		$data['path'] = $this->singleUploading()['path'];
		$this->pageimg_model->insert_data($data);
		$this->load->view('success', [
			'message' => '新增成功',
			'redirectUrl' => ''
		]);
	}

	public function edit_img()
	{
		# code...
	}
}