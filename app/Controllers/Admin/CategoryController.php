<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CategoryModel;

class CategoryController extends BaseController
{
    public function index()
    {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->orderBy('id', 'DESC')->findAll();

        return view('admin/category/index', [
            'title' => 'All Categories',
            'breadcrumb' => [
                ['label' => 'Categories', 'active' => true]
            ],
            'categories' => $categories
        ]);
    }

    public function ajaxList()
    {
      $request = service('request');
      $cache = \Config\Services::cache();
      $cacheKey = "category_raw_list";

    if (!$cacheData = $cache->get($cacheKey)) {
        $db = \Config\Database::connect();
        $builder = $db->table('categories');
        $builder->orderBy('id', 'DESC');
        $query = $builder->get();
        $cacheData = $query->getResultArray();
        $cache->save($cacheKey, $cacheData, 300); // Save raw data
    }

        // Now apply filter/sort/pagination manually on $cacheData
        $searchValue = $request->getPost('search')['value'] ?? "";
        $start = (int) $request->getPost('start') ?? 0;
        $length = (int) $request->getPost('length') ?? 10;

       $filtered = [];

      $filtered = array_filter($cacheData, function ($row) use ($searchValue) {
       return empty($searchValue)
        || stripos($row['name'], $searchValue) !== false
        || stripos($row['slug'], $searchValue) !== false;
        });

        $totalRecords = count($cacheData);
        $filteredRecords = count($filtered);

        // Order
        $orderData = $request->getPost('order');
        $columns = ['id', 'name', 'slug', 'description', 'created_at'];
        
        if (!empty($orderData)) {
        $orderColumnIndex = $orderData[0]['column'] ?? 0;
        $orderDirection = strtolower($orderData[0]['dir'] ?? 'desc');
        $selectedColumn = $columns[$orderColumnIndex] ?? 'id';

        usort($filtered, function ($a, $b) use ($selectedColumn, $orderDirection) {
            // Numeric sort for id
            if (is_numeric($a[$selectedColumn]) && is_numeric($b[$selectedColumn])) {
                return $orderDirection === 'asc'
                    ? $a[$selectedColumn] <=> $b[$selectedColumn]
                    : $b[$selectedColumn] <=> $a[$selectedColumn];
            }

            // String sort for other fields
            return $orderDirection === 'asc'
                ? strcmp($a[$selectedColumn], $b[$selectedColumn])
                : strcmp($b[$selectedColumn], $a[$selectedColumn]);
        });
      }

        $paginated = array_slice($filtered, $start, $length);

        // Prepare DataTable response
        $data = [];
        $serial = $start + 1;

        foreach ($paginated as $row) {
            $data[] = [
                $serial++,
                $row['name'],
                $row['slug'],
                $row['description'],
                date('d M Y', strtotime($row['created_at'])),
                '<button class="btn btn-sm btn-primary editBtn" data-id="'.$row['id'].'" data-name="'.$row['name'].'" data-slug="'.$row['slug'].'" data-description="'.$row['description'].'"><i class="bi bi-pencil-square"></i></button>
                <button class="btn btn-sm btn-danger deleteBtn" data-id="'.$row['id'].'"><i class="bi bi-trash"></i></button>',
            ];
        }

        $response = [
            'draw' => (int) $request->getPost('draw'),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $filteredRecords,
            'data' => $data
        ];

       return $this->response->setJSON($response);

    }
    

    public function store() {
        if($this->request->isAJAX()) {
             $categoryModel = new CategoryModel();
             $data = $this->request->getPost();

             helper('text');

             if(empty($data['slug'])) {
                $data['slug'] = url_title($data['name'], '-', true);
             }

              if(!$categoryModel->save($data)) {

                return $this->response->setJSON([
                    'status' => 'error',
                    'errors' => $categoryModel->errors()
                ]);
                
              }
               
               //Clean Cache after new Category Save
               $cache = \Config\Services::cache();
               $cache->delete('category_raw_list');

              return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Category created successfully.'
              ]);
        }
       
    }

    public function update() {
      $categoryModel = new CategoryModel();
      $data = $this->request->getPost();

      helper('text');

      if(empty($data['slug'])) {
         $data['slug'] = url_title($data['name'], '-', true);
      }

      $id = $data['id'];
      unset($data['id']);
      
      $existing = $categoryModel->find($id);
    
      if(!$existing) {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Can not update invalid category.'
        ]);
      }

      $dataToUpdate = [];

      foreach($data as $key => $value) {
         if(!array_key_exists($key, $existing)) continue;
         if($existing[$key] !== $value) {
          $dataToUpdate[$key] = $value;
         }  
      }

      if(empty($dataToUpdate)) {
         return $this->response->setJSON([
            'status' => 'error',
            'message' => 'No field changed.'
         ]);
      }


      if(!$categoryModel->update($id, $dataToUpdate )) {
         return $this->response->setJSON([
            'status' => 'error',
            'errors' => $categoryModel->errors(),
         ]);
      }

        $cache = \Config\Services::cache();
        $cache->delete('category_raw_list');
      
      return $this->response->setJSON([
         'status' => 'success',
         'message' => 'Category updates successfully.'
      ]);
      
    }

    public function ajaxDelete($id=null) 
    {
         if($this->request->isAJAX()) {
           $categoryModel = new CategoryModel();

           if(!$id || !$categoryModel->find($id)) {
              return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Category not found.',
              ]);
           }

           $categoryModel->delete($id);
            $cache = \Config\Services::cache();
            $cache->delete('category_raw_list');

           return $this->response->setJSON([
              'status' => 'success',
              'message' => 'Category deleted successfully.'
           ]);
           
         }
    }





}