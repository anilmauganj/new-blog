<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
[
                'name'        => 'Create Post',
                'slug'        => 'create_post',
                'description' => 'Allow user to create blog posts',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Edit Post',
                'slug'        => 'edit_post',
                'description' => 'Allow user to edit blog posts',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Delete Post',
                'slug'        => 'delete_post',
                'description' => 'Allow user to delete blog posts',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Manage Users',
                'slug'        => 'manage_users',
                'description' => 'Allow managing all users',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Manage Roles',
                'slug'        => 'manage_roles',
                'description' => 'Allow managing all roles',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Assign Permissions',
                'slug'        => 'assign_permissions',
                'description' => 'Allow assigning permissions to users',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'View Dashboard',
                'slug'        => 'view_dashboard',
                'description' => 'Access to admin dashboard',
                'created_at'  => date('Y-m-d H:i:s'),
            ],


        ];

        $this->db->table('permissions')->insertBatch($permissions);
    }
}