<?php

namespace App\Billings;

use App\Contracts\Repositories\PaymentGatewayContrast;
use Illuminate\Support\Str;

class CreditPaymentGateway implements PaymentGatewayContrast {
    private $currency;
    private $discount;
    private $fees;
    public function __construct($currency)
    {
        $this->currency = $currency;
        $this->discount = 0;
        $this->fees = 0;
    }
    public function setDiscount($amountDiscount) 
    {
        $this->discount = $amountDiscount;
    }
    public function charge($amount) 
    {
        $this->fees = $amount * 0.05;
        return [
            'amount'    => $amount - $this->discount - $this->fees,
            'confirmation_number' => Str::random(),
            'currency'  => $this->currency,
            'discount'  => $this->discount,
            'fees'  => $this->fees,
        ];
    }
}