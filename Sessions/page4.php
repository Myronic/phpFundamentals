<?php
    session_start();
    unset($_SESSION['name']);
    $email = $_SESSION['email'];
    print_r($_SESSION);

    ///if you now go to page 3 the value of name will be undefined.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>page3</title>
</head>
<body>
    <h3>Your name is unset from this session.<br> Go to page 3 to check if it works.<br>Go to page 2 to set it back. <br>Go to page5 to destroy this session. </em><br><br> you have suscribed with the email <?php echo htmlspecialchars($email);?></h3>
    <h6>
        <em>do not worry your personal details are saved only till this session lasts and will be deleted once the session ends. It's stored at the server temporarily.</em>
    </h6>
<hr>
    <a href="page1.php">Goto page1</a><br>
   <a href="page2.php">Goto page2</a><br>
    <a href="page3.php">Goto page3</a><br>
    <a href="page5.php">Goto page5</a><br>
</body>
</html>
    
