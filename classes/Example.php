<?php

class Example{

    public function test_case ( $argument) {
        // i dette tilfælde ønskes det, at $argument er en string
        if (!is_string($argument)) {
            throw new InvalidArgumentException("Argument must be a string");
        } elseif ( strlen($argument) < 10 ) {
            // længden på $argument skal være 10 eller flere tegn
            throw new UnexpectedValueException("There must be at least 10 characters");
        }

    }
}