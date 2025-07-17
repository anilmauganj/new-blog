<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table            = 'categories';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'slug', 'description'];


    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


       // Auto-validation rules
    protected $validationRules = [
        'name' => 'required|min_length[3]|is_unique[categories.name]',
        'slug' => 'permit_empty|alpha_dash|is_unique[categories.slug]',
       'description' => 'permit_empty',
    ];

    protected $validationMessages = [
        'name' => [
            'required'   => 'Category name is required.',
            'is_unique'  => 'This category name already exists.',
        ],
        'slug' => [
            'is_unique'  => 'This slug already exists.',
            'alpha_dash' => 'Slug can only contain letters, numbers, dashes, and underscores.',
        ]
    ];


}