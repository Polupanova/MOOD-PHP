<?php

class ContactMessage
{
    const DATABASE_CONTACTMESSAGE = '../database/Contact_message.txt';

    public function save()
    {
        $formdata = array(
            'name'      => $this->name,
            'email'     => $this->email,
            'message'   => $this->message
        );

        $formdata = json_encode($formdata);
        $formdata .= "\n";
        file_put_contents(self::DATABASE_CONTACTMESSAGE, $formdata, FILE_APPEND);
    }

    public static function create($formdata)
    {
        $cm = new self;
        if (!is_array($formdata)) {
            $formdata = json_decode($formdata, true);
        }
        $cm->name = $formdata['name'];
        $cm->email = $formdata['email'];
        $cm->message = $formdata['message'];

        return $cm;
    }

    public static function getById($form_row_nr)
    {
        $form_row = 1;
        $is_found = false;
        $fp = @fopen(self::DATABASE_CONTACTMESSAGE, 'r');
        if ($fp) {
            while ($formdata = fgets($fp)) {
                if ($form_row === $form_row_nr) {
                    $is_found = true;
                    break;
                }
                $form_row++;
            }
            fclose($fp);
        } else {
            echo 'error';
        }
        if ($is_found) {
            $cm = self::create($formdata);
            return $cm;
        }
        return false;
    }

    public static function getAll()
    {
        $content = file_get_contents(self::DATABASE_CONTACTMESSAGE);
    // create array
      $form_rows = explode("\n", $content);
        $form_rows_count = count($form_rows) - 1;
        $collection = [];
        for ($n = 0; $n < $form_rows_count; $n++) {
            $collection[] = self::create($form_rows[$n]);
        }
        return $collection;
    }
}
