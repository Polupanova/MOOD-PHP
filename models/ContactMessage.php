<?php

class ContactMessage {

 static function save_formdata() {

if ($msgs[$status] == 0){
$ContactMessage = '../database/Contact_message.txt';
    $formdata = array(
      'name'=> $_POST['name'],
      'email'=> $_POST['email'],
      'message'=> $_POST['message'],
    );
    $formdata= json_encode($formdata);
       $formdata .= "\n";
       $fopen = fopen('../database/Contact_message.txt','r');
       fputs($fopen);
       fclose($fopen);
  }
}
  static function create_formdata($formdata){
     if (!is_array($formdata)) {
            $formdata = json_decode($formdata, true);
        }
 }

  static function getAll_formdata(){
     $fopen = fopen('../database/Contact_message.txt','r');
     $fopen_read = fread( $fopen, filesize( $fopen ) );
     fclose($fopen);
     print $fopen_read;
    }
 }
