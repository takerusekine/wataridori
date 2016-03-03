<?php

class Controller_Imgtbl extends Controller_Template
{

	public function action_index()
	{
		$data_img["subnav"] = Model_Imgtbl::find('all');
		$this->template->title = 'Imgtbl &raquo; Index';
		$this->template->content = View::forge('bukkentbl/index', $data_img);
	}
	
	

}
