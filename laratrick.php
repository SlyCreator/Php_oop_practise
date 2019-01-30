<?php
    /*must laravel project follows this pattern
    *they are always extending a class and the static methos is always implemented
    */
    class  Man {

        var $head = 1;
        var $legs = 2;
        var $character = 'bold';

        static function speak(){
            return "Hello I am a Man";
        }

    }

    class Yoruba extends Man {


    }

     echo Yoruba::speak();  
