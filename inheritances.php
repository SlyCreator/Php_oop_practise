<?php

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

    $Babatunde = new Yoruba();
    echo $Babatunde->speak();
   // echo Yoruba::speak();         even when u extends a class 