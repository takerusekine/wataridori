<?php

namespace Fuel\Migrations;

class Create_imgtbls
{
	public function up()
	{
		\DBUtil::create_table('imgtbls', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'bukken_id' => array('constraint' => 11, 'type' => 'int'),
			'img1' => array('constraint' => 255, 'type' => 'varchar'),
			'img2' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'img3' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'img4' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'img5' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'img6' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'img7' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'img8' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'img9' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'img10' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'img11' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'img12' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'img13' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'img14' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'img15' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'created_at' => array('type' => 'datetime'),
			'updated_at' => array('type' => 'datetime'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('imgtbls');
	}
}