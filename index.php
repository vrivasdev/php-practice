<?php 

declare(strict_types = 1);

// include 'includes/autoloader.inc.php';
include 'vendor/autoload.php';

/*$person1 = new Person\Person();

$person1->setName('Diego');
$person1->setAge(20);

echo $person1->getPerson();

echo "<br/>";

$house1 = new House();

$house1->setStreet('Diego');
$house1->setNumber(802);

echo $house1->getAddress();*/

/* Static properties and methods */
/*echo Person\Person::$drinkingAge;

Person\Person::setDrinkingAge(25);
echo Person\Person::getDrinkingAge();*/

$person = new Person\Person;
$person->setName('Paty');

?>