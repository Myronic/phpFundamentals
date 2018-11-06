<?php
    echo 'Hello world!';?>
    <br>
<?php
 print 'it reurns 1<br/>';
 //print is slower than echo


 #variables
 /*
    prefix $
    start with characters[a-z/A-Z] or underscore.
    case sensitive
 */

    #datatypes
        #strings/integers

    $str = 'hello';
    $num1 = 10;
    $num2 = 20;
    $sum = ($num1 + $num2);
    echo $sum;


    $str1 = 'Lorem';
    $str2 = 'Ipsum';
    $str3 = '<br/>'.$str1.' '.$str2;
    echo $str3;
    $str4 = "<br/>$str1 $str2 <br>";
    echo $str4;

    $flt  = 5.5;
    $bool = true;
    #escapechar
    $esc ='They\'re here';
    $esc2 ="they're here";
    echo $esc .'<br>'. $esc2 .'<br>';

    //defining constants ... constants are case sensitive.
    //note: no dollar sign for constants and no "" or '' to echo constants.
    define('PIBY2', '90degrees<br>');
    echo "case sensitive constant : ".PIBY2."<br/>";
    
    //to remoce case sensitivity add true in the end 
    define('PIBY4', '45degrees<br>',true);
    echo "not case sensitive: ". piBy4."<br/>";

 $name = 'Myron Carvalho';
 echo '$name<br/>';
 echo "$name";
?>

