<?php

namespace Fuel\Migrations;

class Create_rooms
{
	public function up()
	{
		\DBUtil::create_table('rooms', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'prop_code' => array('constraint' => 11, 'type' => 'int'),
			'room_stair' => array('constraint' => 11, 'type' => 'int'),
			'rent' => array('constraint' => 11, 'type' => 'int'),
			'kanri_kyoueki' => array('constraint' => 11, 'type' => 'int'),
			'shikikinn' => array('constraint' => 11, 'type' => 'int'),
			'reikinn' => array('constraint' => 11, 'type' => 'int'),
			'area_width' => array('constraint' => '5,1','type' => 'decimal'),
			'hoshou' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'shikibiki_syokyaku'=> array('constraint' => 11, 'type' => 'int', 'null' => true),
			'comment' => array('type' => 'text', 'null' => true),
			'vacant_or_not' => array('type' => 'boolean'),
			'departure_date' => array('type' => 'date', 'null' => true),
			
			'shoukai_fee' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'company_id' => array('constraint' => 11, 'type' => 'int'),
			'img_url1' => array('constraint' => 255, 'type' => 'varchar'),//画像URL1
			'img_url2' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL2
			'img_url3' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL3
			'img_url4' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL4
			'img_url5' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL5
			'img_url6' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL6
			'img_url7' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL7
			'img_url8' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL8
			'img_url9' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL9
			'img_url10' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL10
			'img_url11' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL11
			'img_url12' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL12
			'img_url13' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL13
			'img_url14' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL14
			'img_url15' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL15
			'img_url16' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL16
			'img_url17' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL17
			'img_url18' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL18
			'img_url19' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL19
			'img_url20' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL10
			'img_url21' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL21
			'img_url22' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL22
			'img_url23' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL23
			'img_url24' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL24
			'img_url25' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL25
			'img_url26' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL26
			'img_url27' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL27
			'img_url28' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL28
			'img_url29' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL29
			'img_url30' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL30
			'img_url31' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL31
			'img_url32' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL32
			'img_url33' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL33
			'img_url34' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL34
			'img_url35' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//画像URL35
			'created_at' => array('type' => 'date'),
			'updated_at' => array('type' => 'date'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('rooms');
	}
}