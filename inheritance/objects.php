<?php

class Person {
    protected $first = "Victor";
    private $last = "Rivas";
    private $age = 34;

    public function getFirst() {
        return $this->first;
    }
}

class Pet extends Person {
    public function owner() {
        $a = $this->first;
        return $a;
    }
}

$person = new Person();
echo $person->getFirst();

$pet = new Pet();

echo $pet->owner();


?>