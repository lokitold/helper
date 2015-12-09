<?php

// Require composer autoload
require __DIR__ . "/vendor/autoload.php";

// Alias you class for easy usage
use Lokitold\Helper\Utils;

// Instantiate your class
$var = new Utils();

// Call a class method
echo $var->test();