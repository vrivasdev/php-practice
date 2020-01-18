<?php

class House {
    public $street;    
    public $number;

    public function __constuct($street, $number) {
        $this->street = $street;    
        $this->number = $number;
    }

    public function setStreet($street) {
        $this->street = $street;
    }

    public function setNumber($number) {
        $this->number = $number;
    }

    public function getAddress() {
        return $this->street . ' ' . $this->number;
    }
}

?>