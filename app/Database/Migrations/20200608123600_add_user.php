<?php namespace App\Database\Migrations;

	use CodeIgniter\Database\Migration;

	class AddUser extends Migration
	{
		public function up()
		{
			$this->forge->addField(array(
				'id' => array(
					'type' => 'INT',
					'unsigned' => true,
					'auto_increment' => true,
				),

				'email' => array(
					'type' => 'VARCHAR',
					'constraint' => 255,
					'unique' => true,
				),

				'password' => array(
					'type' => 'VARCHAR',
					'constraint' => 255,
				),

				'first_name' => array(
					'type' => 'VARCHAR',
					'constraint' => 255,
				),

				'last_name' => array(
					'type' => 'VARCHAR',
					'constraint' => 255,
				),

				'username' => array(
					'type' => 'VARCHAR',
					'constraint' => 255,
				),

				'created_at' => array(
					'type' => 'DATETIME',
				),

				'updated_at' => array(
					'type' => 'DATETIME',
				),

				'deleted_at' => array(
					'type' => 'DATETIME',
					'null' => true,
				),
			));

			$this->forge->addKey('id', true);
			$this->forge->createTable('user', true);
		}

		public function down()
		{
			$this->forge->dropTable('user', true);
		}
	}
