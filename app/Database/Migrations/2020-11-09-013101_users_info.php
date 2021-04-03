<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersInfo extends Migration{
	public function up(){
		$this->db->disableForeignKeyChecks();
		$this->forge->addField(array(
				'id_user' => array(
						'type' => 'INT',
						'constraint' => 12,
						'unsigned' => true,
						'null' => false
				),
				'name' => array(
						'type' => 'VARCHAR',
						'constraint' => '100',
						'null' => false						
				),
				'surname' => array(
					'type' => 'VARCHAR',
					'constraint' => '100',
					'null' => false						
				),
				'id_country' => array(
					'type' => 'INT',
					'constraint' => 12,
					'unsigned' => true,
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
		$this->forge->addKey('id_user', true);
		$this->forge->addForeignKey('id_country','countries','id_country','CASCADE','NULL');
		$this->forge->addForeignKey('id_user','users','id','CASCADE','CASCADE');
		$this->forge->createTable('users_info');
		$this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down(){
		$this->forge->dropTable('users_info');
	}
}
