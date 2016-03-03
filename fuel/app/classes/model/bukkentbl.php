<?php
use Orm\Model;

class Model_Bukkentbl extends Model
{
	protected static $_properties = array(
		'id',
		'bukken_id',
		'bukken_name',
		'rent',
		'kanrikyoueki',
		'address',
		'roomstair',
		'allstair',
		'shikikin',
		'reikin',
		'hoshokin',
		'shikibiki_shoukyaku',
		'bukken_type',
		'madori',
		'chikunen',
		'area_width',
		'univ_id',
		'campus_id',
		'near_st1',
		'near_st2',
		'near_st3',
		'near_st4',
		'near_st5',
		'from_st1',
		'from_st2',
		'from_st3',
		'from_st4',
		'from_st5',
		'comment',
		'info_id',
		'created_at',
		'updated_at',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => true,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('id', 'Id', 'required|valid_string[numeric]');
		$val->add_field('bukken_id', 'Bukken Id', 'required|valid_string[numeric]');
		$val->add_field('bukken_name', 'Bukken Name', 'required|max_length[255]');
		$val->add_field('rent', 'Rent', 'required|valid_string[numeric]');
		$val->add_field('kanrikyoueki', 'Kanrikyoueki', 'required|valid_string[numeric]');
		$val->add_field('address', 'Address', 'required|max_length[255]');
		$val->add_field('roomstair', 'Roomstair', 'required|valid_string[numeric]');
		$val->add_field('allstair', 'Allstair', 'required|valid_string[numeric]');
		$val->add_field('shikikin', 'Shikikin', 'required|valid_string[numeric]');
		$val->add_field('reikin', 'Reikin', 'required|valid_string[numeric]');
		$val->add_field('hoshokin', 'Hoshokin', 'required|valid_string[numeric]');
		$val->add_field('shikibiki_shoukyaku', 'Shikibiki Shoukyaku', 'required|valid_string[numeric]');
		$val->add_field('bukken_type', 'Bukken Type', 'required|max_length[255]');
		$val->add_field('madori', 'Madori', 'required|max_length[255]');
		$val->add_field('chikunen', 'Chikunen', 'required|valid_string[numeric]');
		$val->add_field('area_width', 'Area Width', 'required');
		$val->add_field('univ_id', 'Univ Id', 'required|valid_string[numeric]');
		$val->add_field('campus_id', 'Campus Id', 'required|valid_string[numeric]');
		$val->add_field('near_st1', 'Near St1', 'required|max_length[255]');
		$val->add_field('near_st2', 'Near St2', 'required|max_length[255]');
		$val->add_field('near_st3', 'Near St3', 'required|max_length[255]');
		$val->add_field('near_st4', 'Near St4', 'required|max_length[255]');
		$val->add_field('near_st5', 'Near St5', 'required|max_length[255]');
		$val->add_field('from_st1', 'From St1', 'required|valid_string[numeric]');
		$val->add_field('from_st2', 'From St2', 'required|valid_string[numeric]');
		$val->add_field('from_st3', 'From St3', 'required|valid_string[numeric]');
		$val->add_field('from_st4', 'From St4', 'required|valid_string[numeric]');
		$val->add_field('from_st5', 'From St5', 'required|valid_string[numeric]');
		$val->add_field('comment', 'Comment', 'required');
		$val->add_field('info_id', 'Info Id', 'required|valid_string[numeric]');
		$val->add_field('created_at', 'Created At', 'required');
		$val->add_field('updated_at', 'Updated At', 'required');

		return $val;
	}
	
	

}
