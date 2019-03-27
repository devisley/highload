<?php
require_once('vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
require 'BigCalculations.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$time_start = microtime(true);
$app = new BigCalculations(200000);
$app->calculate();
$time_end = microtime(true);

$log = new Logger('BigCalculations_pid' . getmypid());
$log->pushHandler(new StreamHandler('log/calculations.log', Logger::DEBUG));

$log->debug('time usage ' . ($time_end - $time_start) . ' sec');
$log->debug('memory usage ' . memory_get_usage(true) . ' bytes');