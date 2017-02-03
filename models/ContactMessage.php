<?php

function save() {

if ($msgs[$status] == 0){
$ContactMessage = '../database/Contact_message.txt';
    $formdata = array(
      'name'=> $_POST['name'],
      'email'=> $_POST['email'],
      'message'=> $_POST['message'],
    );
    $formdata= json_encode($formdata);
       $formdata .= "\n";
       $fopean = fopen('../database/Contact_message.txt');
       fputs($fopean);
       fclose($fopean);
  }
}
 function create($formdata){
     if (!is_array($formdata)) {
            $formdata = json_decode($formdata, true);
        }
 }

 function getAll(){
     $fopean = fopen('../database/Contact_message.txt');
     $fopean_read = fread($fopen,filesize($fopen));
     fclose($fopean);
     print $fopen;
 }
