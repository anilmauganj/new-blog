<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
       $roles = [
            ['name' => 'Super Admin', 'slug' => 'superadmin'],
            ['name' => 'Admin', 'slug' => 'admin'],
            ['name' => 'Editor', 'slug' => 'editor'],
            ['name' => 'Author', 'slug' => 'author'],
            ['name' => 'User', 'slug' => 'user'],
        ];

         foreach ($roles as $role) {
            $role['created_at'] = date('Y-m-d H:i:s');
            $role['updated_at'] = date('Y-m-d H:i:s');
            $this->db->table('roles')->insert($role);
        }

         echo "✅ RoleSeeder: Roles inserted successfully.\n";
    }
}