<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PostController extends BaseController
{
    public function index()
    {
        return view('admin/post/index', [
            'title' => 'All Posts',
            'breadcrumb' => [
                ['label' => 'Posts', 'active' => true]
            ],
        ]);
    }

    public function create() {
      
        // if(!hasPermission('create_post')) {
        //   return redirect()->back()
        //                    ->with('error', "Sorry don't have permission.");
        // }
        
        return view('admin/post/create', [
         'title' => 'Create Post',
         'breadcrumb' => [
            ['label' => 'Posts', 'url' => 'admin/posts'],
            ['label' => 'Create', 'active' => true]
         ]
            
        ]);
    }

    public function save() {
        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');

        dd($title);
    }
}