<?php

namespace App\Repositories;

use App\Category;
use App\Contracts\Repositories\CategoryRepository;

class CategoryRepositoryEloquent implements CategoryRepository {
    public function model() 
    { 
        return new Category();
    }
    public function getData($data = [], $with = [], $dataSelect = ['*']) 
    {
        $category = $this->model()
                        ->select($dataSelect)
                        ->with($with)
                        ->get();
        return $category;
    }
}
