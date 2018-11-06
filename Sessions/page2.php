<?php
    session_start();

    //$_SESSION['name']="John Rodrigues";
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    print_r($_SESSION);

    //-------------------session expiry setter ----------------------
                
        //Expire the session if user is inactive for 30
        //minutes or more.
        $expireAfter = 10;  //session will last for 10 mins
        
        //Check to see if our "last action" session
        //variable has been set.
        if(isset($_SESSION['last_action'])){
            
            //Figure out how many seconds have passed
            //since the user was last active.
            $secondsInactive = time() - $_SESSION['last_action'];
            
            //Convert our minutes into seconds.
            $expireAfterSeconds = $expireAfter * 60;
            
            //Check to see if they have been inactive for too long.
            if($secondsInactive >= $expireAfterSeconds){
                //User has been inactive for too long.
                //Kill their session.
                session_unset();
                session_destroy();
            }

        }

        //Assign the current timestamp as the user's
        //latest activity
        $_SESSION['last_action'] = time();

        //explained well at http://thisinterestsme.com/expire-php-sessions/
    //-------------------session expiry setter ----------------------

 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>page2</title>
</head>
<body>
    <h3>Hello <em> <?php echo htmlspecialchars($name);?></em> <br><br>You have suscribed with the email <?php echo htmlspecialchars($email);?></h3>
    <h6>
        <em>do not worry your personal details are saved only till this session lasts and will be deleted once the session ends. It's stored at the server temporarily.</em>
    </h6>
<hr>
    <a href="page1.php">Goto page1</a><br>
    <a href="page3.php">Goto page3</a><br>
    <a href="page4.php">Goto page4</a>
</body>
</html>