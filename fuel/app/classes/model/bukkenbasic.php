<?php
use Orm\Model;

class Model_Bukkenbasic extends Model
{
	protected static $_properties = array(
		'id',
		'bukken_name',
		'rent',
		'address',
		'madori',
		'area_width',
		'univ_id',
		'campus_id',
		'nearest_st1',
		'nearest_st2',
		'nearest_st3',
		'nearest_st4',
		'nearest_st5',
		'from_st1',
		'from_st2',
		'from_st3',
		'from_st4',
		'from_st5',
		'shikikinn',
		'reikinn',
		'comment',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('bukken_name', 'Bukken Name', 'required|max_length[50]');
		$val->add_field('rent', 'Rent', 'required|valid_string[numeric]');
		$val->add_field('address', 'Address', 'required|max_length[200]');
		$val->add_field('madori', 'Madori', 'required|max_length[10]');
		$val->add_field('area_width', 'Area Width', 'required');
		$val->add_field('univ_id', 'Univ Id', 'required|valid_string[numeric]');
		$val->add_field('campus_id', 'Campus Id', 'required|valid_string[numeric]');
		$val->add_field('nearest_st1', 'Nearest St1', 'required|max_length[50]');
		$val->add_field('nearest_st2', 'Nearest St2', 'required|max_length[50]');
		$val->add_field('nearest_st3', 'Nearest St3', 'required|max_length[50]');
		$val->add_field('nearest_st4', 'Nearest St4', 'required|max_length[50]');
		$val->add_field('nearest_st5', 'Nearest St5', 'required|max_length[50]');
		$val->add_field('from_st1', 'From St1', 'required|valid_string[numeric]');
		$val->add_field('from_st2', 'From St2', 'required|valid_string[numeric]');
		$val->add_field('from_st3', 'From St3', 'required|valid_string[numeric]');
		$val->add_field('from_st4', 'From St4', 'required|valid_string[numeric]');
		$val->add_field('from_st5', 'From St5', 'required|valid_string[numeric]');
		$val->add_field('shikikinn', 'Shikikinn', 'required');
		$val->add_field('reikinn', 'Reikinn', 'required');
		$val->add_field('comment', 'Comment', 'required');

		return $val;
	}

}
