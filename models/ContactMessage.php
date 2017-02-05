<?php

class ContactMessage {

   static function save_formdata() {
$ContactMessage = '../database/Contact_message.txt';
    $formdata = array(
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'message' => $_POST['message'],
    );
    $formdata= json_encode($formdata);
       $formdata .= "\n";
        file_put_contents('../database/Contact_message.txt', $formdata, FILE_APPEND);
}

  static function create_formdata($formdata){
     if (!is_array($formdata)) {
            $formdata = json_decode($formdata, true);
        }
 }

  static function getAll_formdata(){
    $content = file_get_contents('../database/Contact_message.txt');
    // create array
      $form_rows = explode("\n", $content);
          $form_rows_count = count($form_rows) - 1;
          $collection = [];
          for($n = 0; $n < $form_rows_count; $n++) {
              $collection[] = self::create_formdata($form_rows[$n]);
          }
          //returns an array in the reverse order
          return array_reverse($collection);
      }
 }
