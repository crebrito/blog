<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration{
	public function up(){
		$this->db->disableForeignKeyChecks();
		$this->forge->addField(array(
				'id' => array(
						'type' => 'INT',
						'constraint' => 12,
						'unsigned' => true,
						'auto_increment' => true,
						'null' => false
				),
				'username' => array(
						'type' => 'VARCHAR',
						'constraint' => '120',
						'null' => false,
                        'unique' => true,						
				),
				'email' => array(
					'type' => 'VARCHAR',
					'constraint' => '120',
					'null' => false,
                    'unique' => true,						
				),
				'password' => array(
					'type' => 'VARCHAR',
					'constraint' => '60',
					'null' => false
				),				
				'group' => array(
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
				'deleted_at' => array(
					'type' => 'DATETIME',
					'null' => true,
				),				
			));
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('group','groups','id_group','CASCADE','NULL');		
		$this->forge->createTable('users');
		$this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down(){
		$this->forge->dropTable('users');
	}
}
