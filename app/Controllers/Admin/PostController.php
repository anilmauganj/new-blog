<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PostController extends BaseController
{
    public function index()
    {
        return view('admin/post/index');
    }

    public function create() {
        return view('admin/post/create');
    }
}