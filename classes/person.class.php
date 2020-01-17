<?php

class Person {
    public $name;
    public $age;

    public function __constuctor($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getPerson() {
        return $this->name . ' ' . $this->age;
    }
}

?>