<?php

class Ajax extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function change_page($page_id = null)
	{
		$this->load->model('subpage_model');
		$query = $this->subpage_model->select_by_pageId($page_id); // 把個人的所有分類抓出來
		$counter = 1; // Client 傳過來的順序
		// var_dump($this->input->post('item'));
		// var_dump($query);
		foreach ($query as $key => $value) { // 抓出所有的資料然後 update
			$this->subpage_model->update_data([
				'sub_id' => $value->sub_id,
				'position' => array_search($counter++, $this->input->post('item'))
			]);
		}
		return true;
	}
}