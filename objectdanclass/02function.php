<?php

require_once "data/Person.php";

$eko = new Person("eko", "budi");
$eko->name = "eko";
$eko->sayHello("budi");

$joko = new Person("joko","cirebon");
$joko->name= "Joko";
$joko->sayHello(null);

$eko-> info();
$joko->info();