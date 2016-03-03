<?php

namespace Fuel\Migrations;

class Create_properties
{
	public function up()
	{
		\DBUtil::create_table('properties', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),//物件id
			'address' => array('constraint' => 255, 'type' => 'varchar'), //住所
			'near_st1' => array('constraint' => 255, 'type' => 'varchar'),//最寄駅1
			'near_st2' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//最寄駅2
			'near_st3' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//最寄駅3
			'near_st4' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//最寄駅4
			'near_st5' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//最寄駅5
			'from_st1' => array('constraint' => 255, 'type' => 'varchar'),//最寄駅1から何分
			'from_st2' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//最寄駅2から何分
			'from_st3' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//最寄駅3から何分
			'from_st4' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//最寄駅4から何分
			'from_st5' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),//最寄駅5から何分
			'univ_id' => array('constraint' => 11, 'type' => 'int'),//大学id
			'campus_id' => array('constraint' => 11, 'type' => 'int'),//キャンパスid
			'all_stair' => array('constraint' => 11, 'type' => 'int'),//全階数
			'bukken_type' => array('constraint' => 255, 'type' => 'varchar'),//物件タイプ:マンション、アパードなど
			'kouzou' => array('constraint' => 255, 'type' => 'varchar'),//構造:鉄筋、木造など
			'chikunennsuu' => array('constraint' => 11, 'type' => 'int'),//築年数
			'comment' => array('type' => 'text'),//コメント
			'num_of_houses' => array('constraint' => 11, 'type' => 'int'),//戸数
			'search_wd' => array('constraint' => 255, 'type' => 'varchar'),//検索ワード
			'created_at' => array('type' => 'date'),//作成日
			'updated_at' => array('type' => 'date'),//更新日

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('properties');
	}
}