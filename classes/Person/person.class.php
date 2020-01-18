<?php

namespace Person;

class Person {
    public $name;
    public $age;
    public static $drinkingAge = 21;

    public function __constuct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getPerson() {
        return $this->name . ' ' . $this->age;
    }

    public function getDrinkingAge() {
        return self::$drinkingAge;
    }

    public static function setDrinkingAge($age) {
        self::$drinkingAge = $age;
    }
}

?>