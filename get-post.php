<?php 
   
   if(isset($_GET['name'])){
       print_r($_GET);
        // echo $_GET['name']; //insecure... html and scripting codes can be injected.
        $name= htmlentities($_GET['name']); //disables any authourity from the input to make any changes.
        $email= htmlentities($_GET['email']);
    }

    //get method is prone to cross site scripting (xss) attacks
/*
    if(isset($_POST['name'])){
        print_r($_POST);
     }

   
     if(isset($_REQUEST['name']) OR isset($_REQUEST['email'])){
        print_r($_REQUEST);
         //echo $_GET['name']; //insecure... html and scripting codes can be injected.
        // echo htmlentities($_REQUEST['name']); //disables any authourity from the input to make any changes.
     }

     //echo $_SERVER['QUERY_STRING'];

  */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>get-post</title>
</head>
<body>
    <form action="get-post.php" method="post">
        <div>
            <label for="">Name</label>
            <br>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Email</label>
            <br>
            <input type="text" name="email">
        </div>

        <input type="submit" value="Submit">
    </form>
    <ul>
        <li><a href="get-post.php?name=Myron Carvalho &&email=myron.c@somaiya.edu">Myron</a></li>
        <li><a href="get-post.php?name=Johnem Rodrigues &&email=johnem.c@somaiya.edu">johnem</a></li>
    </ul>



        <h1><?php echo "{$name}'s Profile"?></h1>
        <h1><?php echo "Contact him at {$email}"?></h1>

</body>
</html>
