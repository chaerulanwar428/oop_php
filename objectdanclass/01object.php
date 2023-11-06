<?php

require_once "data/Person.php";

$person = new Person("chaerul","cirebon");
$person->name = "chaerul";
$person->address = "cirebon";
$person->$country = "indonesia";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Adress : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

var_dump($person);


$person2 = new Person("budi",null);
$person2->name = "budi";
$person2->address = null;

var_dump($person2);


//error
//$person->name = [];
