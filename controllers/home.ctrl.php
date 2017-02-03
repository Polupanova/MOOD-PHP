<?php

include'../function/html.lib.php';


function home_controller(){

    $name = $email = $message = $msg = $isError= '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        include'../app/check.php';
        $status = validation($_POST);
        $msgs = array(
            "&#9745; Thanks for your message!",
            "&#9888; Please complete the form!",
            "&#9888; Entered data inappropriate!"
        );
        $msg = $msgs[$status];
        $isError = $status;
        $isError = !!$status;
    }

    //top navigation

    $menu_lang = include '../lang/lv/menu.lang.php';
    $menu_cfg = include '../config/menu.config.php';

    include '../view/layouts/_html.view.php';
}
