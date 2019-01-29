<?php

class Man {

    static $head = 1;
    static $hand = 2;
    static $teeth = 32;

    static function shout(){
        return "I have ".Man::$head." head, ".Man::$hand." hand, and ".Man::$teeth." Teeth";
    }
}


echo Man::shout();