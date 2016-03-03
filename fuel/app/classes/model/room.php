<?php

class Model_Room extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'prop_code',
		'room_stair',
		'rent',
		'shikikinn',
		'reikinn',
		'area_width',
		'hoshou',
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
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_table_name = 'rooms';

}
