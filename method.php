<?php

    class Cars{


        function greeting(){

        }

        function greeting2(){

        }
    }

    $methods = get_class_methods('Cars');
    foreach ($methods as $method) {
        echo $method ."<br>";
    }
   