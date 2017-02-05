<?php

function clean($formvalue = "") {
    $formvalue = trim($formvalue);
    $formvalue = stripslashes($formvalue);
    $formvalue = strip_tags($formvalue);
    $formvalue = htmlspecialchars($formvalue);

    return $formvalue;
}

function form_check_length($formvalue = "", $min_length, $max_length) {
    $formresult = (mb_strlen($formvalue) < $min_length || mb_strlen($formvalue) > $max_length);
    return !$formresult;
}

function validation($fields = array()) {

    foreach($fields as $key => $field){
        $fields[$key] = clean($field);
        if($field == '') {
            return 1;
        }
    }

	$email_validate = filter_var($fields['email'], FILTER_VALIDATE_EMAIL);
	if(form_check_length($fields['name'], 2, 25) && form_check_length($fields['message'], 2, 1000) && $email_validate) {
        return 0;
        //database
        include '../models/ContactMessage.php';
        ContactMessage::save_formdata();
	} else {
        return 2;
    }
}
