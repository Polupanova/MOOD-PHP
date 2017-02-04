<?php
function admin_controller() {

    include '../models/ContactMessage.php';
     $messages = ContactMessage::getAll_formdata();
    include '../view/admin.view.php';
}
