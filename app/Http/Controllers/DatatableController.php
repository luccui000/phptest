<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\CustomerRepositoryConstract;
use Illuminate\Http\Request;

use Datatables;

class DatatableController extends Controller
{
    private $customer;
    public function __construct(CustomerRepositoryConstract $customer)
    {   
        $this->customer = $customer;
    }
    public function customers()
    {
        $customers = $this->customer->anyData();  
        return Datatables::of($customers)
            ->editColumn('image', function($customers) {
                return url('storage/' . $customers->image);
            })
            ->editColumn('created_at', function ($customers) {
                return $customers->updated_at->format('d/m/Y');
            })
            ->editColumn('updated_at', function ($customers) {
                return $customers->updated_at->format('d/m/Y');
            })
            ->addColumn('action', function($customers) { 
                $button = '<a  href="'. url('customer/') . '/' . $customers->id . '/edit" class="edit btn btn-primary btn-sm">edit</a>';
                $button .= '<a  href="'. url('customer/') . '/' . $customers->id . '/delete" class="edit btn btn-danger btn-sm">delete</a>'; 
                return $button;
            })->rawColumns(['action'])->make(true); 
    }
}
