<?php
namespace App\QueryFilters;
use App\Contracts\Pipelines\QueryFilterContracts;

class Sort extends QueryFilterContracts {
    public function makeFilter($builder)
    {
        return $builder->orderBy('title', request('sort'));
    }
}