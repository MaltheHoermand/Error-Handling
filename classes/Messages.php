<?php

class Messages{

    /**
     * Throws exception if $message contains more than 255 characters.
     * Else prints message
     *
     * @param $message
     * @return void
     * @throws Exception
     */
    public static function print_tinytext($message) {
        if (strlen($message) > 255 ) {
            throw new Exception("Der må maks bruges 255 tegn");
        }else {
            echo $message;
        }
    }
}