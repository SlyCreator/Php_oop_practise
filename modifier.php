<?php

    class Man {

        public $head = 1;
        private $hand = 2;
        protected $teeth = 32;

        function shout(){
            return "I have ".$this->head." head, ".$this->hand." hand, and ".$this->teeth." Teeth";
        }
    }

    $Sly = new Man();

   echo $Sly->shout();