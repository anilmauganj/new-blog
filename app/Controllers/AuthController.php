<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\RoleModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginPost() 
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();

        if(!$user || !password_verify($password, $user['password'])) {
             return redirect()->to('login')
                              ->with('error', 'Invalid email or password.');
        }

        $roleModel = new RoleModel();
        $role = $roleModel->find($user['role_id']);

        session()->set([
            'user_id' => $user['id'],
            'email' => $user['email'],
            'full_name' => $user['full_name'],
            'role' => $role['name'],
            'isLoggedIn' => true
        ]);

        return redirect()->to('admin/dashboard')
                         ->with('success', 'You are logged in successfully.');
        
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}