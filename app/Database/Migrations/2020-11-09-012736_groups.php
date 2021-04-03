<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Groups extends Migration{
	public function up(){
		$this->forge->addField(array(
				'id_group' => array(
						'type' => 'INT',
						'constraint' => 12,
						'unsigned' => true,
						'auto_increment' => true,
						'null' => false
				),
				'name_group' => array(
						'type' => 'VARCHAR',
						'constraint' => '30',
						'null' => false						
				),			
				'created_at' => array(
						'type' => 'DATETIME',
						'null' => false,
				),
				'updated_at' => array(
					'type' => 'DATETIME',
					'null' => true,
				),
			));
		$this->forge->addKey('id_group', true);
		$this->forge->createTable('groups');
	}

	//--------------------------------------------------------------------

	public function down(){
		$this->forge->dropTable('groups');
	}
}
