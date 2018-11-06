<?php
    //loops:

    #forloop

    echo '<br>for loop<br>';

    for($i=0;$i<10;$i++){
        echo "number ".($i+1);
        echo '<br>';
    }



    echo '<br>While loop<br>';
    
    $i=0;
    while( $i<10){
        echo ($i+1)." square is ".number_format(pow($i+1,4),2,'.',',');
        //number_format(number,precision after decimal, by what to separate the decimal part from number, by what to separate the number after every set of 3)
        echo '<br>';
        $i++;
    }


    echo '<br>doWhile loop<br>';
    
    $i=0;
    do{
        // echo ($i+1)." squareroot is ".((sqrt($i+1)).toFixed(4));
        $r=sqrt($i+1);
        echo ($i+1)." squareroot is ".(number_format($r,10,'.',','))." rounded to ".(number_format($r,2));
        echo '<br>';
       // sprintf('%.03F', $r);
        echo '<br>';
        $i++;
    }while($i<10);
    


    #foreach
    echo '<br>foreach loop<br><br/>';

    $people = array('kevin'=>array(1,"yes"),'geremy'=>array(2,"no"),'sarah'=>array(3,"idk"));

    foreach($people as $person=> $rollno){
        // var_dump($rollno);  
        // echo $rollno.' : '.$person;
         echo '<br>';
         foreach($rollno as $i){
             echo "<br> $i";
         }
    }
?>