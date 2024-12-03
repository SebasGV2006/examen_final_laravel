<?php

namespace App\services;
use App\Models\Category;

class CategoryService
{
    public function getCategory()
    {
        return Category::all();
    }
}
?>