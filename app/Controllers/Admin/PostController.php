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
      
        if(!hasPermission('create_post')) {
          return redirect()->back()
                           ->with('error', "Sorry don't have permission.");
        }
        return view('admin/post/create');
    }

    public function save() {
        
    }
}