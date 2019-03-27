<?php

require 'BigCalculations.php';

define("XHPROF_MODE", "flick"); // on - включен | flick - мерцающий | off - выключен
define("PAGE_URL", "http://mysite.local/log-xhprof.php");

//Запускаем Xhprof
require 'header.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$app = new BigCalculations(1000);
$app->calculate();

//завершаем Xhprof
require 'footer.php';
