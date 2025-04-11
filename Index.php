<?php
require_once "classes/Messages.php";

$message = 2;
try {
    Messages::print_message($message);
} catch (Exception $e) {
    echo  $e->getMessage();
} finally {
    echo "<br> <br> end of try catch";
}