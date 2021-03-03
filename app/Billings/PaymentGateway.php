<?php

namespace App\Billings;

use App\Contracts\Repositories\PaymentGatewayContrast;
use Illuminate\Support\Str;

class PaymentGateway implements PaymentGatewayContrast {
    private $currency;
    private $discount;
    public function __construct($currency)
    {
        $this->currency = $currency;
        $this->discount = 0;
    }
    public function setDiscount($amountDiscount) 
    {
        $this->discount = $amountDiscount;
    }
    public function charge($amount) 
    {
        return [
            'amount'    => $amount - $this->discount,
            'confirmation_number' => Str::random(),
            'currency'  => $this->currency,
            'discount'  => $this->discount,
        ];
    }
}