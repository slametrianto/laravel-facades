<?php 

namespace App\PaymentFacades;

class PaymentFacades{
    protected static function getFacadesAccessor(){
        return 'payment';
    }
}