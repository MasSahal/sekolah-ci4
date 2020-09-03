<?php

namespace App\Models;

use CodeIgniter\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'categories_id';
    protected $allowedFields = ['category_name'];
    protected $returnType = 'object';
}

//Created by Sahl XII RPL