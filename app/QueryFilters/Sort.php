<?php
namespace App\QueryFilters;
use App\Contracts\Pipelines\QueryFilterContracts;

class Sort extends QueryFilterContracts {
    public function makeFilter($builder)
    {   
        if(request()->getPathInfo() == '/customers') {
            return $builder->orderBy('name', request('sort'));
        } else {
            return $builder->orderBy('title', request('sort'));
        }
    }
} 