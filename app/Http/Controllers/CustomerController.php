<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\CustomerRepositoryConstract;
use App\Customer;
use App\Http\Requests\CustomerStoreRequest; 
use Datatables; 
use Collective\Html\FormFacade as Form;

class CustomerController extends Controller
{
    private $customer;
    public function __construct(CustomerRepositoryConstract $customer)
    {
        $this->customer = $customer;
    }
    public function index()
    {
        $this->authorize('view-customer');
        $customers = $this->customer->anyData(); 
        // return view('customer.index', compact('customers'));
        return view('customer.index');
    }
   public function create()
   {
        $this->authorize('add-customer');
        return view('customer.create');
   }
   public function store(CustomerStoreRequest $request)
   { 
        $this->authorize('add-customer'); 
        $this->customer->create($request->input()); 
        return redirect('customers');
    }
    public function update($id, CustomerStoreRequest $request)
    {
        $this->authorize('edit-customer');
        $this->customer->update($id, $request->input());
        return redirect('customers');
   }
   public function edit($id)
   {
        $this->authorize('edit-customer');
        $customer = $this->customer->find($id);
        return view('customer.edit', compact('customer'));
   } 
   public function destroy(Customer $customer) 
   {
        dd($customer);
   }
   public function anyData()
   {
        $customer = $this->customer->all();
        return Datatables::of($customer)
            ->editColumn('image', function($customer) {
                return url('storage/' . $customer->image);
            })
            ->editColumn('created_at', function ($customer) {
                return $customer->updated_at->format('d/m/Y');
            })
            ->editColumn('updated_at', function ($customer) {
                return $customer->updated_at->format('d/m/Y');
            })
            ->addColumn('action', function($customer) { 
                $button = '<a  href="'. url('customer/') . '/' . $customer->id . '/edit" class="edit btn btn-primary btn-sm">edit</a>';
                $button .= Form::open(['route' => ['customer.destroy',  $customer->id], 'method' => 'delete', 'style'=>'display:inline']);
                $button .= ' <button class="btn btn-danger btn-sm" type="submit">delete</button>';
                $button .= Form::close();
                return $button;
            })->rawColumns(['action'])->make(true);
   }
}
