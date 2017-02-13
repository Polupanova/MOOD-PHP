<?php

const VALIDATION_OK = 0;
const VALIDATION_IS_EMPTY = 1;
const VALIDATION_INVALID_EMAIL_OR_NAME = 2;


function form_check_length($formvalue, $min_length, $max_length)
{
    $formresult = (mb_strlen($formvalue) < $min_length || mb_strlen($formvalue) > $max_length);
    return !$formresult;
}

function validation($fields = array())
{
    foreach ($fields as $key => $field) {
        $fields[$key] = $field;
        if ($field == '') {
            return VALIDATION_IS_EMPTY;
        }
    }

    $email_validate = filter_var($fields['email'], FILTER_VALIDATE_EMAIL);
    if (form_check_length($fields['name'], 2, 25) && form_check_length($fields['message'], 2, 1000) && $email_validate) {
        return VALIDATION_OK;
    } else {
        return VALIDATION_INVALID_EMAIL_OR_NAME;
    }
}
