<?php
require_once 'vendor/autoload.php';

$formula = $argv[1];
$start = $argv[2];
$end = $argv[3];

$points = \Wedo\Math::curve($formula, $start, $end);
$renderer = new \Wedo\Renderer();
echo $renderer->render($points);