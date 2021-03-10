<?php
namespace App\QueryFilters;
use App\Contracts\Pipelines\QueryFilterContracts;

class Limit extends QueryFilterContracts {
    public function makeFilter($builder)
    {
        return $builder->take(request('limit'));
    }
}