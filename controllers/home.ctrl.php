  <?php

include'../function/html.lib.php';


function home_controller()
{
    // define variables as strings
    $name = $email = $message = $msg = $isError= '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include'../function/form_validation.lib.php';

        $status = validation($_POST);
        $msgs = array(
            ' ☑ Thanks for your message!',
            ' ⚠ Please complete the form!',
            ' ⚠ Entered data inappropriate!'
        );
        $msg = $msgs[$status];
        $isError = $status;

        //variable
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if ($isError == 0) {
            include '../models/ContactMessage.php';

            $cm             = new ContactMessage;
            $cm->name       = $name;
            $cm->email      = $email;
            $cm->message    = $message;
            // save method
            $cm->save();
            $name = '';
            $email ='';
            $message='';
        }
    }

    //top navigation
    global $app;
    $menu_lang = include '../lang/'.$app->getLocale().'/menu.lang.php';
    $menu_cfg = include '../config/menu.config.php';

    include '../view/layouts/_html.view.php';
}
