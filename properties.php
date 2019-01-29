<?php  

    class Family {

        var $children ; 
        var $house;
        var $post = 'CEO';

        function employer_details(){
            return "The ".$this->post." has ".$this->children." children and ".$this->house." Houses";

        }
    }
    $john = new Family();
    $john->children = 7;
    $john->house = 3;
    echo  $john->employer_details();