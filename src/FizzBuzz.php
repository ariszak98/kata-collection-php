<?php

/**
 * ************************** FizzBuzz **************************
 * **************************************************************
 * 1. For multiples of "3" print "Fizz" instead of the number   *
 * 2. For multiples of "5" print "Buzz"                         *
 * 3. For numbers that are multiples of both print "FizzBuzz"   *
 * 4. For numbers that are NOT multiples of none return number  *
 */

 namespace App;

 class FizzBuzz {

    public static function convert($number){

        $result = '';

        if($number % 3 == 0){
            $result .= 'Fizz';
        }

        if($number % 5 == 0){
            $result .= 'Buzz';
        }

        return $result ?: $number;
    }

 }