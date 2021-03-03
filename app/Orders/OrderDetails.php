<?php

namespace App\Orders;
 
use App\Contracts\Repositories\PaymentGatewayContrast;

class OrderDetails {
    private $paymentContrast;
    public function __construct(PaymentGatewayContrast $paymentContrast)
    { 
        $this->paymentContrast = $paymentContrast;
    }
    public function all($amountDiscount) 
    {
        $this->paymentContrast->setDiscount($amountDiscount);
        
        return [
            'name'  => 'Luc Cui',
            'address' => 'Tra Vinh'
        ];
    }
}