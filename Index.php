<?php
require_once "classes/Messages.php";

$message = "afasfasd";
try {
    Messages::print_tinytext($message);
} catch (Exception $e) {
    echo "Caught exception " . $e->getMessage() . "\n";
}