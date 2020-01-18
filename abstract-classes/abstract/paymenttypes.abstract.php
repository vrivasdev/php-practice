<?php

abstract class Visa {
    public function visaPayment() {
        return "Visa Payment";
    }
    abstract public function getPayment();
}