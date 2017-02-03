<?php
function admin_controller() {

    include '../models/ContactMessage.php';
    getAll();
    include '../view/admin.view.php';
}
