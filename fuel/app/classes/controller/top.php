<?php

class Controller_Top extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Top &raquo; Index';
		$this->template->content = View::forge('top/index', $data);
	}

}
