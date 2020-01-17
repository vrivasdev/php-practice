<?php

class House {
    public $street;    
    public $number;

    public function __constuctor($street, $number) {
        $this->street = $street;    
        $this->number = $number;
    }

    public function getAddress() {
        return $this->street . ' ' . $this->number;
    }
}

?>