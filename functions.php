<?php
        function fun($hello ="world"){
            echo "hi $hello";
        }
        fun("myron<br>");

        function fact($n){
             if($n==0 || $n==1)  
                return 1;
             else
                return $n*fact($n-1);
        }

        for($i=0;$i<=10;$i++){
            echo "<br>factorial of $i is ".fact($i);
        }
        
        $num=20;
        function add10($a){
            $a+=10;
            echo "<br><br>value inside add10 function $a";
        }            


        function add5(&$a){
            $a+=5;
            echo "<br><br>value inside add5 function $a";
        }

        add10($num);  //in this value is assigned to the variable and the value is valid only through the scope of the function
        echo "<br>value outside add10 function $num";

        add5($num);  //in this the value is assigned to the memory location of the variable hence permanently changing its value from the location.
        echo "<br>value outside add5 function $num<br>";


           
#switches

    $workout = 'c';

    switch($workout){
        case 'back':
            echo "your favourite workout is back ";
            echo "workout<br>";
            break;

        case 'leg':
            echo "your favourite workout is leg ";
            echo "workout<br>";
            break;

        case 'chest':
            echo "your favourite workout is chest ";
            echo "workout<br>";
            break;

        default: 
            echo "your favourite workout is no workout";
            echo "<br>";

    }
        




?>