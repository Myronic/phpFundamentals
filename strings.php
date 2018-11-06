<?php 
    $output = substr('hello',1);
    $output2 = substr('hello',1,3);
    $output3 = substr('hello',-4,-2);
    echo $output;
    echo "<br>".$output2;
    echo "<br>".$output3;
    echo "<br>";
    echo "hello worldo";
    $output4= strlen('Hello worldo'); //checks for last occurence
    $output5= strpos('Hello worldo','o',5); //position of occurence of o after index 5
    $output6= strrpos('Hello worldo','o'); //checks for last occurence
    echo "<br>".$output4;
    echo "<br>".$output5;
    echo "<br>".$output6."<br>";


    $text = '  i am a boy       ';
    echo "<br>before trim: ";
    var_dump($text);
    $text = trim($text);
    echo "<br>after trim: ";
    var_dump($text);
    echo "<br>";
    echo strtoupper($text);
    echo "<br>";
    echo strtolower($text);
    echo "<br>";
    //start words with caps...
    echo ucwords($text);
    echo "<br>";


    $op= str_replace('boy', 'girl', $text);
    echo $op;
    echo "<br>";
    echo is_string($op);
    echo "<br>";

    $values = array(true, false , null, 33, '33', 33.2, '332.3', '', '  ', 0, '0');
    foreach($values as $value){
        if(is_string($value)){
            var_dump($value);
            echo " is a string<br>";
        }

        else {
            var_dump($value);
            echo " is not a string<br>";
        }     
    }

    #compressing a string

    $longString = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat mollitia nisi esse incidunt natus eum saepe, assumenda odit unde veniam magnam quisquam consequuntur illo minima omnis eaque asperiores. Incidunt recusandae, eos laboriosam expedita enim commodi similique quae quaerat magnam explicabo error aperiam magni saepe. Quasi explicabo neque saepe voluptatibus placeat.";
    $compressed = gzcompress($longString);
    echo "<br>a compressed string----------:<br>{$compressed}<br>";
    $uncompressed = gzuncompress($compressed);
    echo "<br>an uncompressed string----------:<br>{$uncompressed}<br><br>";
    
    
    //skipping html entities and displaying it as usual string on screen.
    echo "<br> html entities:<br>";
    $str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
    echo " using htmlentities() : ". htmlentities($str) ."<br> using htmlspecialchars() : ". htmlspecialchars($str) ;
   



    

?>