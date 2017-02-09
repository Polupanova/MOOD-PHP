<?php

function clean($formvalue)
{
    include'../function/FormValidation.lib.php';

    $formvalue = trim($formvalue);
    $formvalue = stripslashes($formvalue);
    $formvalue = strip_tags($formvalue);
    $formvalue = htmlspecialchars($formvalue);

    return $formvalue;
}
