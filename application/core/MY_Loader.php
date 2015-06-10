<?php

class MY_Loader extends CI_Loader {
	public function __construct()
	{
		parent::__construct();
	}

	public function view($view, $vars = array(), $return = FALSE)
	{
		$vars = array_merge(['_logo' => $this->_logo()], ['_background' => $this->_background()], ['_footer' => $this->_footer()], $vars);
		return $this->_ci_load(array(
			'_ci_view' => $view,
			'_ci_vars' => $this->_ci_object_to_array($vars),
			'_ci_return' => $return
		));
	}

	private function _logo()
	{
		$CI =& get_instance(); // 參考到CI超級物件上
		$CI->load->model('logo_model');
		return $CI->logo_model->select_data(1)->path;
	}

	private function _background()
	{
		$CI =& get_instance(); // 參考到CI超級物件上	
		$CI->load->model('background_model');
		return $CI->background_model->select_data(1)->path;
	}

	private function _footer()
	{
		$CI =& get_instance(); // 參考到CI超級物件上
		$CI->load->model('footer_model');
		return $CI->footer_model->select_data(1)->content;
	}
}