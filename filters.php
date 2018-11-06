 <?php 
    if(filter_has_var(INPUT_POST,'data') OR filter_has_var(INPUT_POST,'email')){
        echo "Data found<br>";
    } else{
        echo "no data<br>";
    }
//to validate emails
    if(filter_has_var(INPUT_POST,'data')){
        $email = $_POST['data'];
        //remove illeegal characters
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email."<br>";

        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo 'email is valid';
        }
         else {
            echo 'email is not valid';
        }

        $email = null;
    }
//some keys that can be used for validation in place of regerxp
    #FILTER_VALIDATE_EMAIL	
    #FILTER_VALIDATE_FLOAT	
    #FILTER_VALIDATE_INT	
    #FILTER_VALIDATE_IP	
    #FILTER_VALIDATE_MAC	
    #FILTER_VALIDATE_REGEXP	
    #FILTER_VALIDATE_URL	


    #FILTER_SANITIZE_EMAIL   Remove all characters except letters, digits and !#$%&'*+-=?^_`{|}~@.[].
    #FILTER_SANITIZE_ENCODED
    #FILTER_SANITIZE_NUMBER_FLOAT
    #FILTER_SANITIZE_NUMBER_INT
    #FILTER_SANITIZE_SPECIAL_CHARS
    #FILTER_SANITIZE_MAGIC_QUOTES
    #FILTER_SANITIZE_MAGIC_STRING
    #FILTER_SANITIZE_MAGIC_URL
   
    // if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    //     $nameErr = "Only letters and white space allowed"; 
    //   }


 ?>
 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name="data" placeholder="email id">
    <button type="submit">Submit</button>
 </form>


 <?php
     
     $var = 25;

     if(filter_var($var,FILTER_VALIDATE_INT)){
         echo $var." is a number";
     }else{
         echo $var." is not a number";
     }
     echo '<br>';
 
     $numb = '23terg445fgdfg45er';
     var_dump($numb);
     echo '<br>';
     var_dump(filter_var($numb, FILTER_SANITIZE_NUMBER_INT));

     $var = '<script> alert("hacked")</script>';
     $var= filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);
     echo $var."<br>";



    //  $filters = array(
    //      'email' => FILTER_VALIDATE_EMAIL,
    //      "score"=> array(
    //          'filter'=> FILTER_VALIDATE_INT,
    //          "options"=> array(
    //              "min_range"=> 1,
    //              "max_range"=> 100
    //          )
    //      )
    // );

    //  print_r(filter_input_array(INPUT_POST,$filters));


    #-------------------data validatons using array of filters------------

    $arr = array(
        "name" =>"myron carvalho",
        "age"=> "20",
        "email"=>"myron.c@somaiya.edu"
    );


    //keep the nameof index of associated element same. eg name email age
    $filters = array(
        "name"=> array(
            "filter"=>FILTER_CALLBACK,
            "options"=> "ucwords"
        ),
        "age"=>array(
            "filter"=> FILTER_VALIDATE_INT,
            "options"=>array(
                "min_range"=> 1,
                "max_range"=> 100
            )
        ),
        "email"=>FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($arr,$filters));
 ?>



  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name="email" placeholder="email id">
    <input type="text" name="score" placeholder="score">
    <button type="submit">Submit</button>
 </form>

