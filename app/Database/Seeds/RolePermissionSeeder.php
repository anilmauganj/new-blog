<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();

        // Role IDs from your table
        $roles = [
            'superadmin' => 4,
            'admin'      => 5,
            'editor'     => 6,
            'author'     => 7,
            'user'       => 8,
        ];

        // Get all permission IDs
        $permissionRows = $db->table('permissions')->get()->getResultArray();
        $permissions = [];
        foreach ($permissionRows as $row) {
            $permissions[$row['slug']] = $row['id'];
        }

        // Define role → permission mapping
        $rolePermissions = [
            'superadmin' => array_values($permissions), // all permissions
            'admin' => [
                $permissions['view_dashboard'],
                $permissions['manage_users'],
                $permissions['manage_roles'],
                $permissions['assign_permissions'],
            ],
            'editor' => [
                $permissions['view_dashboard'],
                $permissions['create_post'],
                $permissions['edit_post'],
            ],
            'author' => [
                $permissions['view_dashboard'],
                $permissions['create_post'],
            ],
            'user' => [
                $permissions['view_dashboard'],
            ],
        ];

        // Insert into role_permission table
        foreach ($rolePermissions as $roleSlug => $permIds) {
            $roleId = $roles[$roleSlug];
            foreach ($permIds as $permId) {
                $db->table('role_permission')->insert([
                    'role_id' => $roleId,
                    'permission_id' => $permId,
                    'created_at' => date('Y-m-d H:i:s'),
                ]);
            }
        }
    }
}