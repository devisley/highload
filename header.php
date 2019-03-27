<?php
/**
 * Created by PhpStorm.
 * User: Ruslan
 * Date: 24.03.2019
 * Time: 14:51
 */

//Запускаем Xhprof
if (XHPROF_MODE === 'on'){
    enableXhprof();
} else if (XHPROF_MODE === 'flick') {
    if (PAGE_URL === 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']) {
        enableXhprof();
    }
}

function enableXhprof() {
    if (extension_loaded('xhprof')) {
        include_once '/var/www/xhprof/xhprof_lib/utils/xhprof_lib.php';
        include_once '/var/www/xhprof/xhprof_lib/utils/xhprof_runs.php';

        xhprof_enable(XHPROF_FLAGS_CPU);
    }
}