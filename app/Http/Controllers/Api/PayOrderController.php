<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Billings\PaymentGateway;
use App\Contracts\Repositories\PaymentGatewayContrast;
use App\Orders\OrderDetails;

class PayOrderController extends Controller
{
    //
    public function index(OrderDetails $orderDetails, PaymentGatewayContrast $paymentGateway) 
    {
        $order = $orderDetails->all(300);
        dd($paymentGateway->charge(1000));
    }
}
