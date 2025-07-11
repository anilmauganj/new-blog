<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRolePermissionTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            
            'role_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            
            'permission_id' => [
                'type' => 'INT',
                'unsigned' => true
            ]
        ]);

        $this->forge->addKey(['role_id', 'permission_id'], true);
        $this->forge->addForeignKey('role_id', 'roles', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('permission_id', 'permissions', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('role_permission');
    }

    public function down()
    {
        $this->forge->dropTable('role_permission');
    }
}