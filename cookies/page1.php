<!-- <?php 
    if(isset($_POST['submit'])){
        session_start(); //strt the session
        $username= htmlentities($_POST['username']);
        $email= htmlentities($_POST['email']);
        
        //this cookie will last for 3600 seconds (1 hour) from current time. 
        setcookie('username', $username, time()+3600); 
        setcookie('email', $email, time()+3600);
        header('Location: page2.php');
    }
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <title>page1</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" >
        <input type="text"  name="username" placeholder="enter name" value="Myron Carvalho"><br>
        <input type="text"  name="email" placeholder="enter email" value="myron.c@somaiya.edu"><br>
        <input type="submit" value="submit" name=submit>
    </form>
   
</body>
</html>