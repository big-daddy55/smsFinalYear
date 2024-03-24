<?php
namespace Core;

class Validator
{
    //we are using static because it's a pure function, therefore method can be called directly without creating an instance of the class, check "tweets-create.php"
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    //function to validate email.
    public static function email($value){
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}

?>