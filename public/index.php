<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/Wcs/Hello.php';

$hello = new Hello;
$hello->talk();