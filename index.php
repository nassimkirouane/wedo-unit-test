<?php
require_once 'vendor/autoload.php';

echo 'Compute the factorial of : ';
$number = trim(fgets(STDIN));

var_export(\Wedo\Math::factorial(5));
echo "\n";