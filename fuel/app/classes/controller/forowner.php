<?php
    
class Controller_Forowner extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Forowner &raquo; Index';
		$this->template->content = View::forge('forowner/index', $data);
	}

}
