<?php
    /*
    array types 
    - indexed
    - associative
    -multidimensional
    */

    #indexed-----------------

    $people = array('kevin','geremy','sarah');
    $people[]="bella";
    echo $people[3].'<br>';

    $id = array(101,102,103,104);
    echo $id[2].'<br>';

    $cars = ['honda', 'toyota', 'ford'];
    $cars[] = 'bmw';    //adds to the end of the array by default if index not mentioned
    echo $cars[3].'<br>';
    print_r($cars).'<br>';
    echo 'count = '.count($cars).'<br>';    //count() sends array size, here size of cars array
    var_dump($cars); 
    echo '<br><br>';
    //var_dump() useful in debugging. 
    //here since an array is passed it gives the datatype, index and length of all the elements in the array
    
    #associated arrays----------
    //user defined index
    $letters = array('a'=> 97,'b'=> 98, 'c'=>99); //string as key and number as value
    $numbers = array(1614006 =>'akshay',1614007 =>'myronic',1614008 =>'amol'); //number as key and string as value
    $letters['d'] = 100;
    $numbers[1614021] = 'prajwal';
    echo $letters['d'].'<br>'; //character as an index
    echo $numbers[1614021].'<br>'; //number as an index
    print_r($letters);
    echo '<br>';
    var_dump($numbers);
    echo '<br><br>';

    #multidimensional-----------

    $phone = array(
        array('samsung',20,101,'jagged'),
        array('xiomi',80),
        array('apple',10,103)
    );
    //to traverse through different columns of 2d jagged array use count() eg for (i=0; i<count($phone[i]); i++) to traverse through the first subarray
    echo $phone[1][0].'<br>';
    print_r($phone);
    echo '<br><br>';
    var_dump($phone);
    echo '<br><br>';
?>

