<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $roles = ['superadmin', 'admin', 'editor', 'author', 'user'];

        foreach($roles as $roleSlug) {
           $role = $this->db->table('roles')->where('slug', $roleSlug)->get()->getRow();

           if(!$role) {
               echo "Role '{$roleSlug}' not found! Please seed role first. \n";
               continue;
           }

           $data = [
             'email' =>  $roleSlug. '@example.com',
             'password' => password_hash('123456', PASSWORD_DEFAULT),
            'role_id'           => $role->id,
            'is_active'         => 1,
            'full_name'         => ucfirst($roleSlug) . ' User',
            'profile_img'       => 'default.png',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s'),
               
           ];

           $this->db->table('users')->insert($data);
        }

        echo "All role based users inserted successfully.";
    }
}