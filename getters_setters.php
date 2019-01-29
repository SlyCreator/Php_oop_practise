<?php

    class Man {
        static private $name = 'John';

        static function get_name(){
            return self::$name;
        }

        static function set_name(){
            self::$name= 'Chima';
        }

    }

    Man::set_name();
   echo  Man::get_name();
