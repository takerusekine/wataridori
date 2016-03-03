<?php
class Controller_Bukkenbasic extends Controller_Template
{

	public function action_index()
	{
		$data['bukkenbasics'] = Model_Bukkenbasic::find('all');
		$this->template->title = "Bukkenbasics";
		$this->template->content = View::forge('bukkenbasic/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('bukkenbasic');

		if ( ! $data['bukkenbasic'] = Model_Bukkenbasic::find($id))
		{
			Session::set_flash('error', 'Could not find bukkenbasic #'.$id);
			Response::redirect('bukkenbasic');
		}

		$this->template->title = "Bukkenbasic";
		$this->template->content = View::forge('bukkenbasic/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Bukkenbasic::validate('create');

			if ($val->run())
			{
				$bukkenbasic = Model_Bukkenbasic::forge(array(
					'bukken_name' => Input::post('bukken_name'),
					'rent' => Input::post('rent'),
					'address' => Input::post('address'),
					'madori' => Input::post('madori'),
					'area_width' => Input::post('area_width'),
					'univ_id' => Input::post('univ_id'),
					'campus_id' => Input::post('campus_id'),
					'nearest_st1' => Input::post('nearest_st1'),
					'nearest_st2' => Input::post('nearest_st2'),
					'nearest_st3' => Input::post('nearest_st3'),
					'nearest_st4' => Input::post('nearest_st4'),
					'nearest_st5' => Input::post('nearest_st5'),
					'from_st1' => Input::post('from_st1'),
					'from_st2' => Input::post('from_st2'),
					'from_st3' => Input::post('from_st3'),
					'from_st4' => Input::post('from_st4'),
					'from_st5' => Input::post('from_st5'),
					'shikikinn' => Input::post('shikikinn'),
					'reikinn' => Input::post('reikinn'),
					'comment' => Input::post('comment'),
				));

				if ($bukkenbasic and $bukkenbasic->save())
				{
					Session::set_flash('success', 'Added bukkenbasic #'.$bukkenbasic->id.'.');

					Response::redirect('bukkenbasic');
				}

				else
				{
					Session::set_flash('error', 'Could not save bukkenbasic.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Bukkenbasics";
		$this->template->content = View::forge('bukkenbasic/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('bukkenbasic');

		if ( ! $bukkenbasic = Model_Bukkenbasic::find($id))
		{
			Session::set_flash('error', 'Could not find bukkenbasic #'.$id);
			Response::redirect('bukkenbasic');
		}

		$val = Model_Bukkenbasic::validate('edit');

		if ($val->run())
		{
			$bukkenbasic->bukken_name = Input::post('bukken_name');
			$bukkenbasic->rent = Input::post('rent');
			$bukkenbasic->address = Input::post('address');
			$bukkenbasic->madori = Input::post('madori');
			$bukkenbasic->area_width = Input::post('area_width');
			$bukkenbasic->univ_id = Input::post('univ_id');
			$bukkenbasic->campus_id = Input::post('campus_id');
			$bukkenbasic->nearest_st1 = Input::post('nearest_st1');
			$bukkenbasic->nearest_st2 = Input::post('nearest_st2');
			$bukkenbasic->nearest_st3 = Input::post('nearest_st3');
			$bukkenbasic->nearest_st4 = Input::post('nearest_st4');
			$bukkenbasic->nearest_st5 = Input::post('nearest_st5');
			$bukkenbasic->from_st1 = Input::post('from_st1');
			$bukkenbasic->from_st2 = Input::post('from_st2');
			$bukkenbasic->from_st3 = Input::post('from_st3');
			$bukkenbasic->from_st4 = Input::post('from_st4');
			$bukkenbasic->from_st5 = Input::post('from_st5');
			$bukkenbasic->shikikinn = Input::post('shikikinn');
			$bukkenbasic->reikinn = Input::post('reikinn');
			$bukkenbasic->comment = Input::post('comment');

			if ($bukkenbasic->save())
			{
				Session::set_flash('success', 'Updated bukkenbasic #' . $id);

				Response::redirect('bukkenbasic');
			}

			else
			{
				Session::set_flash('error', 'Could not update bukkenbasic #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$bukkenbasic->bukken_name = $val->validated('bukken_name');
				$bukkenbasic->rent = $val->validated('rent');
				$bukkenbasic->address = $val->validated('address');
				$bukkenbasic->madori = $val->validated('madori');
				$bukkenbasic->area_width = $val->validated('area_width');
				$bukkenbasic->univ_id = $val->validated('univ_id');
				$bukkenbasic->campus_id = $val->validated('campus_id');
				$bukkenbasic->nearest_st1 = $val->validated('nearest_st1');
				$bukkenbasic->nearest_st2 = $val->validated('nearest_st2');
				$bukkenbasic->nearest_st3 = $val->validated('nearest_st3');
				$bukkenbasic->nearest_st4 = $val->validated('nearest_st4');
				$bukkenbasic->nearest_st5 = $val->validated('nearest_st5');
				$bukkenbasic->from_st1 = $val->validated('from_st1');
				$bukkenbasic->from_st2 = $val->validated('from_st2');
				$bukkenbasic->from_st3 = $val->validated('from_st3');
				$bukkenbasic->from_st4 = $val->validated('from_st4');
				$bukkenbasic->from_st5 = $val->validated('from_st5');
				$bukkenbasic->shikikinn = $val->validated('shikikinn');
				$bukkenbasic->reikinn = $val->validated('reikinn');
				$bukkenbasic->comment = $val->validated('comment');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('bukkenbasic', $bukkenbasic, false);
		}

		$this->template->title = "Bukkenbasics";
		$this->template->content = View::forge('bukkenbasic/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('bukkenbasic');

		if ($bukkenbasic = Model_Bukkenbasic::find($id))
		{
			$bukkenbasic->delete();

			Session::set_flash('success', 'Deleted bukkenbasic #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete bukkenbasic #'.$id);
		}

		Response::redirect('bukkenbasic');

	}

}
