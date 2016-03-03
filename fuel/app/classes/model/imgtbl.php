<?php

class Model_Imgtbl extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'bukken_id',
		'img1',
		'img2',
		'img3',
		'img4',
		'img5',
		'img6',
		'img7',
		'img8',
		'img9',
		'img10',
		'img11',
		'img12',
		'img13',
		'img14',
		'img15',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => true,
		),
	);

	protected static $_table_name = 'imgtbls';
	
	protected static $_belongs_to = array(
		'use_img' => array(
			'model_to' => 'Model_Bukkentbl',
			'key_from' => 'bukken_id',
			'key_to' => 'bukken_id',
			'cascade_save' => false,
			'cascade_delete' => false,
		),
	);

}
