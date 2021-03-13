<?php

namespace App\Repositories;
 
use App\Customer; 
use Illuminate\Pipeline\Pipeline;
use App\Contracts\Repositories\CustomerRepositoryConstract;

class CustomerRepository implements CustomerRepositoryConstract {
    public function anyData()
    {
        return Customer::latest()->take(5)->get();
    }
    public function all()
    {
        return app(Pipeline::class)
                ->send(Customer::query())
                ->through([
                    \App\QueryFilters\Active::class,
                    \App\QueryFilters\Limit::class,
                    \App\QueryFilters\Sort::class,
                ])
                ->thenReturn()->get();
                // ->paginate(config('PAGINATE') ?? 20);
    }
    public function find($id)
    {
        return Customer::findOrFail($id);
    } 
    public function create($input)
    { 
        $customer = Customer::create($input);
        return $this->storeImage($customer);
    }
    public function update($id, $input)
    {
        $customer = $this->find($id);
        $this->storeImage($customer);
        return $customer->update($input);
    }
    public function delete($id)
    {

    } 
    public function show($id)
    { 
        return  Customer::findOrFail($id);
    }  
    private function storeImage($input)
    {  
        if(request()->has('image')) {
            $input->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);
        } 
    } 
}