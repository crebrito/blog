<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Countries extends Migration{
	public function up(){
		$this->forge->addField(array(
				'id_country' => array(
						'type' => 'INT',
						'constraint' => 12,
						'unsigned' => true,
						'auto_increment' => true,
						'null' => false
				),
				'name' => array(
						'type' => 'VARCHAR',
						'constraint' => '80',
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
		$this->forge->addKey('id_country', true);
		$this->forge->createTable('countries');
	}

	//--------------------------------------------------------------------

	public function down(){
		$this->forge->dropTable('countries');
	}
}