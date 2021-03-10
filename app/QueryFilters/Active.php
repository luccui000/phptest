<?php
namespace App\QueryFilters;
use App\Contracts\Pipelines\QueryFilterContracts;

class Active extends QueryFilterContracts {
    public function makeFilter($builder)
    {
        return $builder->where($this->getFilterName(), request('active'));
    }
}