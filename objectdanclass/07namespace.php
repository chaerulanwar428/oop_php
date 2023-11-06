<?php

namespace {

require_once "data/Conflict.php";
require_once "data/Helper.php";

$conflict1 = new data\one\conflict();

$conflict2 = new data\two\conflict();


echo helper\APPLICATION . PHP_EOL;

Helper\helpMe();

}