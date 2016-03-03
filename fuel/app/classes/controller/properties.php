<?php
class Controller_Properties extends Controller_Template
{

	public function action_index()
	{
		$data['properties'] = Model_Property::find('all');
		$this->template->title = "Properties";
		$this->template->content = View::forge('properties/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('properties');

		if ( ! $data['property'] = Model_Property::find($id))
		{
			Session::set_flash('error', 'Could not find property #'.$id);
			Response::redirect('properties');
		}

		$this->template->title = "Property";
		$this->template->content = View::forge('properties/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Property::validate('create');

			if ($val->run())
			{
				$property = Model_Property::forge(array(
					'address' => Input::post('address'),
					'kanri_kyoueki' => Input::post('kanri_kyoueki'),
					'near_st1' => Input::post('near_st1'),
					'near_st2' => Input::post('near_st2'),
					'near_st3' => Input::post('near_st3'),
					'near_st4' => Input::post('near_st4'),
					'near_st1' => Input::post('near_st1'),
					'from_st1' => Input::post('from_st1'),
					'from_st2' => Input::post('from_st2'),
					'from_st3' => Input::post('from_st3'),
					'from_st4' => Input::post('from_st4'),
					'from_st5' => Input::post('from_st5'),
					'univ_id' => Input::post('univ_id'),
					'campus_id' => Input::post('campus_id'),
					'all_stair' => Input::post('all_stair'),
					'bukken_type' => Input::post('bukken_type'),
					'chikunennsuu' => Input::post('chikunennsuu'),
					'comment' => Input::post('comment'),
					'search_wd' => Input::post('search_wd'),
					'img_url1' => Input::post('img_url1'),
					'img_url2' => Input::post('img_url2'),
					'img_url3' => Input::post('img_url3'),
					'img_url4' => Input::post('img_url4'),
					'img_url5' => Input::post('img_url5'),
					'img_url6' => Input::post('img_url6'),
					'img_url7' => Input::post('img_url7'),
					'img_url8' => Input::post('img_url8'),
					'img_url9' => Input::post('img_url9'),
					'img_url10' => Input::post('img_url10'),
					'img_url11' => Input::post('img_url11'),
					'img_url12' => Input::post('img_url12'),
					'img_url13' => Input::post('img_url13'),
					'img_url14' => Input::post('img_url14'),
					'img_url15' => Input::post('img_url15'),
				));

				if ($property and $property->save())
				{
					Session::set_flash('success', 'Added property #'.$property->id.'.');

					Response::redirect('properties');
				}

				else
				{
					Session::set_flash('error', 'Could not save property.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Properties";
		$this->template->content = View::forge('properties/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('properties');

		if ( ! $property = Model_Property::find($id))
		{
			Session::set_flash('error', 'Could not find property #'.$id);
			Response::redirect('properties');
		}

		$val = Model_Property::validate('edit');

		if ($val->run())
		{
			$property->address = Input::post('address');
			$property->kanri_kyoueki = Input::post('kanri_kyoueki');
			$property->near_st1 = Input::post('near_st1');
			$property->near_st2 = Input::post('near_st2');
			$property->near_st3 = Input::post('near_st3');
			$property->near_st4 = Input::post('near_st4');
			$property->near_st1 = Input::post('near_st1');
			$property->from_st1 = Input::post('from_st1');
			$property->from_st2 = Input::post('from_st2');
			$property->from_st3 = Input::post('from_st3');
			$property->from_st4 = Input::post('from_st4');
			$property->from_st5 = Input::post('from_st5');
			$property->univ_id = Input::post('univ_id');
			$property->campus_id = Input::post('campus_id');
			$property->all_stair = Input::post('all_stair');
			$property->bukken_type = Input::post('bukken_type');
			$property->chikunennsuu = Input::post('chikunennsuu');
			$property->comment = Input::post('comment');
			$property->search_wd = Input::post('search_wd');
			$property->img_url1 = Input::post('img_url1');
			$property->img_url2 = Input::post('img_url2');
			$property->img_url3 = Input::post('img_url3');
			$property->img_url4 = Input::post('img_url4');
			$property->img_url5 = Input::post('img_url5');
			$property->img_url6 = Input::post('img_url6');
			$property->img_url7 = Input::post('img_url7');
			$property->img_url8 = Input::post('img_url8');
			$property->img_url9 = Input::post('img_url9');
			$property->img_url10 = Input::post('img_url10');
			$property->img_url11 = Input::post('img_url11');
			$property->img_url12 = Input::post('img_url12');
			$property->img_url13 = Input::post('img_url13');
			$property->img_url14 = Input::post('img_url14');
			$property->img_url15 = Input::post('img_url15');

			if ($property->save())
			{
				Session::set_flash('success', 'Updated property #' . $id);

				Response::redirect('properties');
			}

			else
			{
				Session::set_flash('error', 'Could not update property #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$property->address = $val->validated('address');
				$property->kanri_kyoueki = $val->validated('kanri_kyoueki');
				$property->near_st1 = $val->validated('near_st1');
				$property->near_st2 = $val->validated('near_st2');
				$property->near_st3 = $val->validated('near_st3');
				$property->near_st4 = $val->validated('near_st4');
				$property->near_st1 = $val->validated('near_st1');
				$property->from_st1 = $val->validated('from_st1');
				$property->from_st2 = $val->validated('from_st2');
				$property->from_st3 = $val->validated('from_st3');
				$property->from_st4 = $val->validated('from_st4');
				$property->from_st5 = $val->validated('from_st5');
				$property->univ_id = $val->validated('univ_id');
				$property->campus_id = $val->validated('campus_id');
				$property->all_stair = $val->validated('all_stair');
				$property->bukken_type = $val->validated('bukken_type');
				$property->chikunennsuu = $val->validated('chikunennsuu');
				$property->comment = $val->validated('comment');
				$property->search_wd = $val->validated('search_wd');
				$property->img_url1 = $val->validated('img_url1');
				$property->img_url2 = $val->validated('img_url2');
				$property->img_url3 = $val->validated('img_url3');
				$property->img_url4 = $val->validated('img_url4');
				$property->img_url5 = $val->validated('img_url5');
				$property->img_url6 = $val->validated('img_url6');
				$property->img_url7 = $val->validated('img_url7');
				$property->img_url8 = $val->validated('img_url8');
				$property->img_url9 = $val->validated('img_url9');
				$property->img_url10 = $val->validated('img_url10');
				$property->img_url11 = $val->validated('img_url11');
				$property->img_url12 = $val->validated('img_url12');
				$property->img_url13 = $val->validated('img_url13');
				$property->img_url14 = $val->validated('img_url14');
				$property->img_url15 = $val->validated('img_url15');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('property', $property, false);
		}

		$this->template->title = "Properties";
		$this->template->content = View::forge('properties/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('properties');

		if ($property = Model_Property::find($id))
		{
			$property->delete();

			Session::set_flash('success', 'Deleted property #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete property #'.$id);
		}

		Response::redirect('properties');

	}

}
