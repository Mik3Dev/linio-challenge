<?php

require_once('vendor/autoload.php');

use App\Counter;

$counter = new Counter();
$list = $counter->getArrayList();
print(json_encode($list, JSON_PRETTY_PRINT));