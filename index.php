<?php
require_once 'vendor/autoload.php';

echo 'Compute the summation of primes of : ';
$number = trim(fgets(STDIN));

var_export(\Wedo\Math::summationOfPrime($number));
echo "\n";