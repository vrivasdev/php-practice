<?php 
spl_autoload_register('myAutoLoader');

function myAutoLoader($className) {
    $path = "classes/";
    $extension = ".class.php";
    $fullPath = $path . $className . $extension;    

    include_once($fullPath);
}

$person1 = new Person('Diego', 30);
echo $person1->getPerson();

$house1 = new House('Av. Bolivar', 300);
echo $house1->getAddress();

?>