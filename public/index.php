<?php


$APP['METHOD'] = $_SERVER['REQUEST_METHOD'];
$pos = strpos($_SERVER['REQUEST_URI'], '?');
if ($pos !== false) {
    $APP['ROUTE'] = substr($_SERVER['REQUEST_URI'], 0, $pos);
} else {
    $APP['ROUTE'] = $_SERVER['REQUEST_URI'];
}


include '../function/core.lib.php';
run_controller($APP['ROUTE']);
exit;
