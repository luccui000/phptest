<?php

namespace App\Contracts\Repositories;

interface PaymentGatewayContrast {
    
    public function charge($amount);

    public function setDiscount($amountDiscount);
}