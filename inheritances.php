<?php

    class  Man {

        var $head = 1;
        var $legs = 2;
        var $character = 'bold';

        function speak(){
            return "Hello I am a Man";
        }

    }

    class Yoruba extends Man {


    }

    $Babatunde = new Yoruba();
    echo $Babatunde->speak();