<?php
use Orm\Model;

class Model_Property extends Model
{
	protected static $_properties = array(
		'id',
		'address',
		'kanri_kyoueki',
		'near_st1',
		'near_st2',
		'near_st3',
		'near_st4',
		'near_st1',
		'from_st1',
		'from_st2',
		'from_st3',
		'from_st4',
		'from_st5',
		'univ_id',
		'campus_id',
		'all_stair',
		'bukken_type',
		'chikunennsuu',
		'comment',
		'search_wd',
		'img_url1',
		'img_url2',
		'img_url3',
		'img_url4',
		'img_url5',
		'img_url6',
		'img_url7',
		'img_url8',
		'img_url9',
		'img_url10',
		'img_url11',
		'img_url12',
		'img_url13',
		'img_url14',
		'img_url15',
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
		$val->add_field('address', 'Address', 'required|max_length[255]');
		$val->add_field('kanri_kyoueki', 'Kanri Kyoueki', 'required|valid_string[numeric]');
		$val->add_field('near_st1', 'Near St1', 'required|max_length[255]');
		$val->add_field('near_st2', 'Near St2', 'required|max_length[255]');
		$val->add_field('near_st3', 'Near St3', 'required|max_length[255]');
		$val->add_field('near_st4', 'Near St4', 'required|max_length[255]');
		$val->add_field('near_st1', 'Near St1', 'required|max_length[255]');
		$val->add_field('from_st1', 'From St1', 'required|max_length[255]');
		$val->add_field('from_st2', 'From St2', 'required|max_length[255]');
		$val->add_field('from_st3', 'From St3', 'required|max_length[255]');
		$val->add_field('from_st4', 'From St4', 'required|max_length[255]');
		$val->add_field('from_st5', 'From St5', 'required|max_length[255]');
		$val->add_field('univ_id', 'Univ Id', 'required|valid_string[numeric]');
		$val->add_field('campus_id', 'Campus Id', 'required|valid_string[numeric]');
		$val->add_field('all_stair', 'All Stair', 'required|valid_string[numeric]');
		$val->add_field('bukken_type', 'Bukken Type', 'required|max_length[255]');
		$val->add_field('chikunennsuu', 'Chikunennsuu', 'required|valid_string[numeric]');
		$val->add_field('comment', 'Comment', 'required');
		$val->add_field('search_wd', 'Search Wd', 'required|max_length[255]');
		$val->add_field('img_url1', 'Img Url1', 'required|max_length[255]');
		$val->add_field('img_url2', 'Img Url2', 'required|max_length[255]');
		$val->add_field('img_url3', 'Img Url3', 'required|max_length[255]');
		$val->add_field('img_url4', 'Img Url4', 'required|max_length[255]');
		$val->add_field('img_url5', 'Img Url5', 'required|max_length[255]');
		$val->add_field('img_url6', 'Img Url6', 'required|max_length[255]');
		$val->add_field('img_url7', 'Img Url7', 'required|max_length[255]');
		$val->add_field('img_url8', 'Img Url8', 'required|max_length[255]');
		$val->add_field('img_url9', 'Img Url9', 'required|max_length[255]');
		$val->add_field('img_url10', 'Img Url10', 'required|max_length[255]');
		$val->add_field('img_url11', 'Img Url11', 'required|max_length[255]');
		$val->add_field('img_url12', 'Img Url12', 'required|max_length[255]');
		$val->add_field('img_url13', 'Img Url13', 'required|max_length[255]');
		$val->add_field('img_url14', 'Img Url14', 'required|max_length[255]');
		$val->add_field('img_url15', 'Img Url15', 'required|max_length[255]');

		return $val;
	}

}
