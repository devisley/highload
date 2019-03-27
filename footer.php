<?php
/**
 * Created by PhpStorm.
 * User: Ruslan
 * Date: 24.03.2019
 * Time: 14:52
 */

//Завершаем работу Xhprof
if (XHPROF_MODE === 'on'){
    disableXhprof();
} else if (XHPROF_MODE === 'flick') {
    if (PAGE_URL === 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']) {
        disableXhprof();
    }
}

function disableXhprof() {
    if (extension_loaded('xhprof')) {
        $profilerNamespace = 'calculations';
        $xhprofData = xhprof_disable();
        $xhprofRuns = new XHProfRuns_Default();
        $runId = $xhprofRuns->save_run($xhprofData, $profilerNamespace);
    }

}