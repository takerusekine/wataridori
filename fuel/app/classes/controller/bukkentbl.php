<?php
class Controller_Bukkentbl extends Controller_Template
{

	public function action_index()
	{
		$data['bukkentbls'] = Model_Bukkentbl::find('all');
		$this->template->title = "Bukkentbls";
		
		$this->template->content = View::forge('bukkentbl/index', $data);
				
		
	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('bukkentbl');

		if ( ! $data['bukkentbl'] = Model_Bukkentbl::find($id))
		{
			Session::set_flash('error', 'Could not find bukkentbl #'.$id);
			Response::redirect('bukkentbl');
		}

		$this->template->title = "Bukkentbl";
		$this->template->content = View::forge('bukkentbl/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Bukkentbl::validate('create');

			if ($val->run())
			{
				$bukkentbl = Model_Bukkentbl::forge(array(
					'id' => Input::post('id'),
					'bukken_id' => Input::post('bukken_id'),
					'rent' => Input::post('rent'),
					'kanrikyoueki' => Input::post('kanrikyoueki'),
					'address' => Input::post('address'),
					'roomstair' => Input::post('roomstair'),
					'allstair' => Input::post('allstair'),
					'shikikin' => Input::post('shikikin'),
					'reikin' => Input::post('reikin'),
					'hoshokin' => Input::post('hoshokin'),
					'shikibiki_shoukyaku' => Input::post('shikibiki_shoukyaku'),
					'bukken_type' => Input::post('bukken_type'),
					'madori' => Input::post('madori'),
					'chikunen' => Input::post('chikunen'),
					'area_width' => Input::post('area_width'),
					'univ_id' => Input::post('univ_id'),
					'campus_id' => Input::post('campus_id'),
					'near_st1' => Input::post('near_st1'),
					'near_st2' => Input::post('near_st2'),
					'near_st3' => Input::post('near_st3'),
					'near_st4' => Input::post('near_st4'),
					'near_st5' => Input::post('near_st5'),
					'from_st1' => Input::post('from_st1'),
					'from_st2' => Input::post('from_st2'),
					'from_st3' => Input::post('from_st3'),
					'from_st4' => Input::post('from_st4'),
					'from_st5' => Input::post('from_st5'),
					'comment' => Input::post('comment'),
					'comment' => Input::post('info_id'),
					'created_at' => Input::post('created_at'),
					'updated_at' => Input::post('updated_at'),
				));

				if ($bukkentbl and $bukkentbl->save())
				{
					Session::set_flash('success', 'Added bukkentbl #'.$bukkentbl->id.'.');

					Response::redirect('bukkentbl');
				}

				else
				{
					Session::set_flash('error', 'Could not save bukkentbl.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Bukkentbls";
		$this->template->content = View::forge('bukkentbl/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('bukkentbl');

		if ( ! $bukkentbl = Model_Bukkentbl::find($id))
		{
			Session::set_flash('error', 'Could not find bukkentbl #'.$id);
			Response::redirect('bukkentbl');
		}

		$val = Model_Bukkentbl::validate('edit');

		if ($val->run())
		{
			$bukkentbl->id = Input::post('id');
			$bukkentbl->bukken_id = Input::post('bukken_id');
			$bukkentbl->rent = Input::post('rent');
			$bukkentbl->kanrikyoueki = Input::post('kanrikyoueki');
			$bukkentbl->address = Input::post('address');
			$bukkentbl->roomstair = Input::post('roomstair');
			$bukkentbl->allstair = Input::post('allstair');
			$bukkentbl->shikikin = Input::post('shikikin');
			$bukkentbl->reikin = Input::post('reikin');
			$bukkentbl->hoshokin = Input::post('hoshokin');
			$bukkentbl->shikibiki_shoukyaku = Input::post('shikibiki_shoukyaku');
			$bukkentbl->bukken_type = Input::post('bukken_type');
			$bukkentbl->madori = Input::post('madori');
			$bukkentbl->chikunen = Input::post('chikunen');
			$bukkentbl->area_width = Input::post('area_width');
			$bukkentbl->univ_id = Input::post('univ_id');
			$bukkentbl->campus_id = Input::post('campus_id');
			$bukkentbl->near_st1 = Input::post('near_st1');
			$bukkentbl->near_st2 = Input::post('near_st2');
			$bukkentbl->near_st3 = Input::post('near_st3');
			$bukkentbl->near_st4 = Input::post('near_st4');
			$bukkentbl->near_st5 = Input::post('near_st5');
			$bukkentbl->from_st1 = Input::post('from_st1');
			$bukkentbl->from_st2 = Input::post('from_st2');
			$bukkentbl->from_st3 = Input::post('from_st3');
			$bukkentbl->from_st4 = Input::post('from_st4');
			$bukkentbl->from_st5 = Input::post('from_st5');
			$bukkentbl->comment = Input::post('comment');
			$bukkentbl->info_id = Input::post('info_id');
			$bukkentbl->created_at = Input::post('created_at');
			$bukkentbl->updated_at = Input::post('updated_at');

			if ($bukkentbl->save())
			{
				Session::set_flash('success', 'Updated bukkentbl #' . $id);

				Response::redirect('bukkentbl');
			}

			else
			{
				Session::set_flash('error', 'Could not update bukkentbl #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$bukkentbl->id = $val->validated('id');
				$bukkentbl->bukken_id = $val->validated('bukken_id');
				$bukkentbl->rent = $val->validated('rent');
				$bukkentbl->kanrikyoueki = $val->validated('kanrikyoueki');
				$bukkentbl->address = $val->validated('address');
				$bukkentbl->roomstair = $val->validated('roomstair');
				$bukkentbl->allstair = $val->validated('allstair');
				$bukkentbl->shikikin = $val->validated('shikikin');
				$bukkentbl->reikin = $val->validated('reikin');
				$bukkentbl->hoshokin = $val->validated('hoshokin');
				$bukkentbl->shikibiki_shoukyaku = $val->validated('shikibiki_shoukyaku');
				$bukkentbl->bukken_type = $val->validated('bukken_type');
				$bukkentbl->madori = $val->validated('madori');
				$bukkentbl->chikunen = $val->validated('chikunen');
				$bukkentbl->area_width = $val->validated('area_width');
				$bukkentbl->univ_id = $val->validated('univ_id');
				$bukkentbl->campus_id = $val->validated('campus_id');
				$bukkentbl->near_st1 = $val->validated('near_st1');
				$bukkentbl->near_st2 = $val->validated('near_st2');
				$bukkentbl->near_st3 = $val->validated('near_st3');
				$bukkentbl->near_st4 = $val->validated('near_st4');
				$bukkentbl->near_st5 = $val->validated('near_st5');
				$bukkentbl->from_st1 = $val->validated('from_st1');
				$bukkentbl->from_st2 = $val->validated('from_st2');
				$bukkentbl->from_st3 = $val->validated('from_st3');
				$bukkentbl->from_st4 = $val->validated('from_st4');
				$bukkentbl->from_st5 = $val->validated('from_st5');
				$bukkentbl->comment = $val->validated('comment');
				$bukkentbl->info_id = $val->validated('info_id');
				$bukkentbl->created_at = $val->validated('created_at');
				$bukkentbl->updated_at = $val->validated('updated_at');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('bukkentbl', $bukkentbl, false);
		}

		$this->template->title = "Bukkentbls";
		$this->template->content = View::forge('bukkentbl/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('bukkentbl');

		if ($bukkentbl = Model_Bukkentbl::find($id))
		{
			$bukkentbl->delete();

			Session::set_flash('success', 'Deleted bukkentbl #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete bukkentbl #'.$id);
		}

		Response::redirect('bukkentbl');

	}

}
