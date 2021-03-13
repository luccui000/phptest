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
        $out = Datatables::of($customers)->make(true);
        
        return Datatables::of($customers)->make(true);
    }
}
