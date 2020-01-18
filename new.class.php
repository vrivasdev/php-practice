<?php

class NewClass {
    public $data = "property";

    public function __construct() {
        echo "This is the contructor";
    }
    
    public function setNewProperty($data) {
        $this->data = $data;
    }

    public function getProperty() {
        return $this->data;
    }

    public function __destruct() {
        echo "This is the destructor";
    }
}

$object = new NewClass;

$object->setNewProperty('PHP');

unset($object); // it destroys the object instance

echo $object->getProperty();

echo "Hello";

?>