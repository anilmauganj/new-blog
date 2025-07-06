<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function index()
    {
        return view('admin/user/index');
    }

    public function create() 
    {

        return view('admin/user/create');
    }
}