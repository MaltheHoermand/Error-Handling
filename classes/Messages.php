<?php

class Messages{

    /**
     * Takes and prints message
     * Throws error if args not of type String
     *
     * @param $message
     * @return void
     * @throws Exception
     */
    public static function print_message($message) {
        if (gettype($message) == 'string') {
            echo $message;

        }else {
            throw new Exception("message not of type String");
        }
    }
}