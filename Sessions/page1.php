<?php 
    if(isset($_POST['submit'])){
        session_start(); //strt the session
        $_SESSION['name']= htmlentities($_POST['name']);
        $_SESSION['email']= htmlentities($_POST['email']);

        header('Location: page2.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <title>page1</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" >
        <input type="text"  name="name" placeholder="enter name" value="Myron Carvalho"><br>
        <input type="text"  name="email" placeholder="enter email" value="myron.c@somaiya.edu"><br>
        <input type="submit" value="submit" name=submit>
    </form>
   
</body>
</html>