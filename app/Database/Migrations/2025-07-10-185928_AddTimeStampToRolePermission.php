<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTimeStampToRolePermission extends Migration
{
    public function up()
    {
        $this->forge->addColumn('role_permission', [
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'after' => 'permission_id'
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'after' => 'created_at'            ],
        ]);

        
    }

    public function down()
    {
        $this->forge->dropColumn('role_permission', ['created_at', 'updated_at']);
    }
}