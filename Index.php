<?php
require_once "classes/Example.php";

try {
    $ex = new Example();
    $ex->test_case ("Hello!");

} catch (InvalidArgumentException $e) {
    echo "Argument exception: " . $e->getMessage();
} catch (UnexpectedValueException $e) {
    echo "Value exception: " . $e->getMessage();
}