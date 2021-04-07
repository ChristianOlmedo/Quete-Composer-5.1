<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/Wcs/Hello.php';
require_once __DIR__ . '/../vendor/ehime/hello-world/src/HelloWorld/SayHello.php';

$hello = new Hello;
$hello->talk();

$sayHello = new HelloWorld\SayHello;
$sayHello->world();
