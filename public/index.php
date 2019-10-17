<?php

require_once '../vendor/autoload.php'; // Autoload files using Composer autoload

use App\wcs\Bonjour;

use HelloWorld\SayHello;
echo SayHello::world();

$hello = new Bonjour();
echo $hello->getTalk();