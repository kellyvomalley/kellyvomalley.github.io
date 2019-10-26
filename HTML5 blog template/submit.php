<?php
        if(isset($_POST['name']) && isset($_POST['email'] && isset ($_POST['subject'] && isset ($_POST['comment'])))) {
        $data = $_POST['name'] . '-' . $_POST['email'] . '-' . $_POST['subject'] . '-' . $_POST['comment'] . "\n";
        $ret = file_put_contents('HAS.txt', $data, FILE_APPEND | LOCK_EX);
        if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}
