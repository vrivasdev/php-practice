<?php

interface PaymentInterface {
    public function payNow();
}
interface LoginInterface {
    public function login();
}

class Paypal implements PaymentInterface, LoginInterface {
    public function login() {
        echo 'Login';
    }
    public function payNow() {
        echo 'Pay now';
    }
    public function paymentProcess() {
        $this->login();
        $this->payNow();
    }
}

class Visa implements PaymentInterface {
    public function payNow() {
        echo 'Pay now';
    }
    public function paymentProcess() {
        $this->payNow();
    }
}

class Cash implements PaymentInterface {
    public function payNow() {
        echo 'Pay now';
    }
    public function paymentProcess() {
        $this->payNow();
    }
}

class BuyProduct {
    public function pay(PaymentInterface $paymentType) {
        $paymentType->paymentProcess();
    }
}

$paymentType = new Visa();
$buyProduct = new BuyProduct();

$buyProduct->pay($paymentType);

?>