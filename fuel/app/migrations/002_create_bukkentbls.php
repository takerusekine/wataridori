<?php

namespace Fuel\Migrations;

class Create_bukkentbls
{
	public function up()
	{
		\DBUtil::create_table('bukkentbls', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'bukken_id' => array('constraint' => 11, 'type' => 'int'),
			'bukken_name' => array('constraint' => 255, 'type' => 'varchar'),
			'rent' => array('constraint' => 11, 'type' => 'int'),
			'kanrikyoueki' => array('constraint' => 11, 'type' => 'int'),
			'address' => array('constraint' => 255, 'type' => 'varchar'),
			'roomstair' => array('constraint' => 11, 'type' => 'int'),
			'allstair' => array('constraint' => 11, 'type' => 'int'),
			'shikikin' => array('constraint' => 10, 'type' => 'varchar'),
			'reikin' => array('constraint' => 10, 'type' => 'varchar'),
			'hoshokin' => array('constraint' => 10, 'type' => 'varchar'),
			'shikibiki_shoukyaku' => array('constraint' => 50, 'type' => 'varchar'),
			'bukken_type' => array('constraint' => 30, 'type' => 'varchar'),
			'madori' => array('constraint' => 30, 'type' => 'varchar'),
			'chikunen' => array('constraint' => 5, 'type' => 'int'),
			'area_width' => array('constraint' => '5,1','type' => 'decimal'),
			'univ_id' => array('constraint' => 10, 'type' => 'int'),
			'campus_id' => array('constraint' => 10, 'type' => 'int'),
			'near_st1' => array('constraint' => 50, 'type' => 'varchar'),
			'near_st2' => array('constraint' => 50, 'type' => 'varchar', 'null' => true),
			'near_st3' => array('constraint' => 50, 'type' => 'varchar', 'null' => true),
			'near_st4' => array('constraint' => 50, 'type' => 'varchar', 'null' => true),
			'near_st5' => array('constraint' => 50, 'type' => 'varchar', 'null' => true),
			'from_st1' => array('constraint' => 50, 'type' => 'varchar'),
			'from_st2' => array('constraint' => 50, 'type' => 'varchar', 'null' => true),
			'from_st3' => array('constraint' => 50, 'type' => 'varchar', 'null' => true),
			'from_st4' => array('constraint' => 50, 'type' => 'varchar', 'null' => true),
			'from_st5' => array('constraint' => 50, 'type' => 'varchar', 'null' => true),
			'comment' => array('type' => 'text'),
			'info_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('type' => 'datetime'),
			'updated_at' => array('type' => 'datetime'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('bukkentbls');
	}
}