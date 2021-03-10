<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\CustomerRepositoryConstract;
use App\Customer;
use App\Http\Requests\CustomerStoreRequest; 
use Datatables;

class CustomerController extends Controller
{
    private $customer;
    public function __construct(CustomerRepositoryConstract $customer)
    {
        $this->customer = $customer;
    }
    public function index()
    {
        $customers = $this->customer->all();
        return view('customer.index', compact('customers'));
    }
   public function create()
   {
        return view('customer.create');
   }
   public function store(CustomerStoreRequest $request)
   {
        $this->customer->create($request->input()); 
        return redirect('customers');
   }
   public function update()
   {

   }
   public function edit()
   {
       
   } 
}
