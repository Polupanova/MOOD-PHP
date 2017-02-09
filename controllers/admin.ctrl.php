<?php
function admin_controller()
{
    include '../models/ContactMessage.php';
    $messages = ContactMessage::getAll();
    $messages = array_reverse($messages);
    include '../view/admin.view.php';
}
