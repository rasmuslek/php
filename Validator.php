<?php

class Validator
    {

        private static $validations= 0;

        public static function validateEmail($email)
        {
        self::$validations++;
        return !!filter_var($email, FILTER_VALIDATE_EMAIL);
        }

        public static function validateAge($age){
            self::$validations++;
            return $age >= 0 && $age <= 120;
        }

        public static function validatePassword($password){
            self::$validations++;
            return strlen($password) >= 8;
        }

        public static function getTotalValidations(){
            return self::$validations;
        }
    }

echo Validator::validateEmail("test@example.com"); // true
echo Validator::validateEmail("invalid-email"); // false
echo Validator::validateAge(25); // true
echo Validator::validateAge(150); // false
echo Validator::validatePassword("secret123"); // true
echo Validator::validatePassword("short"); // false
echo Validator::getTotalValidations(); // 6