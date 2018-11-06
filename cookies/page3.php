<?php 
    $user  = ['name'=> 'Myron', 'email'=> 'myron.c@somaiya.edu' , 'age'=>20];
    $user = serialize($user); //to avoid error of //Warning: setcookie() expects parameter 2 to be string, array given
    setcookie('user', $user, time()+(3600)); 

  // echo $user; //op=a:3:{s:4:"name";s:5:"Myron";s:5:"email";s:19:"myron.c@somaiya.edu";s:3:"age";i:20;}
  $user= unserialize($_COOKIE['user']);
  // echo $user; //Notice: Array to string conversion 
  print_r($user);

?>
