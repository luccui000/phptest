<?php

namespace App\Repositories;

use App\Abstracts\StoreImage;
use App\Customer; 
use Illuminate\Pipeline\Pipeline;
use App\Contracts\Repositories\CustomerRepositoryConstract;

class CustomerRepository extends StoreImage implements CustomerRepositoryConstract {
    public function all()
    {
        return app(Pipeline::class)
                ->send(Customer::query())
                ->through([
                    \App\QueryFilters\Active::class,
                    \App\QueryFilters\Limit::class,
                    \App\QueryFilters\Sort::class,
                ])
                ->thenReturn()
                ->paginate(config('PAGINATE') ?? 20);
    }
    public function find($id)
    {
        return Customer::findOrFail($id);
    } 
    public function action($input)
    {
        return Customer::create($input);
    }
    public function builderUpdate($id, array $data)
    {

    }
    public function delete($id)
    {

    } 
    public function show($id)
    { 
        return  Customer::findOrFail($id);
    }  
}