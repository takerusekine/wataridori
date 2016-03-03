<?php

namespace Fuel\Migrations;

class Create_bukkenbasics
{
	public function up()
	{
		\DBUtil::create_table('bukkenbasics', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'bukken_name' => array('constraint' => 50, 'type' => 'varchar'),
			'rent' => array('constraint' => 10, 'type' => 'int'),
			'address' => array('constraint' => 200, 'type' => 'varchar'),
			'madori' => array('constraint' => 10, 'type' => 'varchar'),
			'area_width' => array('type' => 'decimal'),
			'univ_id' => array('constraint' => 11, 'type' => 'int'),
			'campus_id' => array('constraint' => 11, 'type' => 'int'),
			'nearest_st1' => array('constraint' => 50, 'type' => 'varchar'),
			'nearest_st2' => array('constraint' => 50, 'type' => 'varchar'),
			'nearest_st3' => array('constraint' => 50, 'type' => 'varchar'),
			'nearest_st4' => array('constraint' => 50, 'type' => 'varchar'),
			'nearest_st5' => array('constraint' => 50, 'type' => 'varchar'),
			'from_st1' => array('constraint' => 11, 'type' => 'int'),
			'from_st2' => array('constraint' => 11, 'type' => 'int'),
			'from_st3' => array('constraint' => 11, 'type' => 'int'),
			'from_st4' => array('constraint' => 11, 'type' => 'int'),
			'from_st5' => array('constraint' => 11, 'type' => 'int'),
			'shikikinn' => array('type' => 'decimal'),
			'reikinn' => array('type' => 'decimal'),
			'comment' => array('type' => 'text'),
			'created_at' => array('type' => 'date', 'null' => true),
			'updated_at' => array('type' => 'date', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('bukkenbasics');
	}
}