<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true, 
                'auto_increment' => true            
            ],

            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
                'unique' => true
            ],

            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'role_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true
            ],

            'is_active' => [
                'type' => 'BOOLEAN',
                'default' => true
            ],

            'email_verified_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],

            'full_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],

            'profile_img' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],

        ]);

      $this->forge->addKey('id', true);
      $this->forge->addForeignKey('role_id', 'roles', 'id', 'SET NULL', 'CASCADE');
      $this->forge->createTable('users');

    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}