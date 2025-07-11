<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserPermissionTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],

            'permission_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
        ]);

        $this->forge->addKey(['user_id', 'permission_id'], true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('permission_id', 'permissions', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('user_permission');
    }

    public function down()
    {
        $this->forge->dropTable('user_permission');
    }
}