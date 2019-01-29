<?php 

    class Car {

        
    }
    $all_Class =  get_declared_classes();
    foreach ($all_Class as $class) {
        echo $class."<br>";
    }