<?php
    session_start();
    $name= isset($_SESSION['name']) ? $_SESSION['name']: "Guest";
    $email= isset($_SESSION['email']) ? $_SESSION['email']: "Guest_ID";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>page3</title>
</head>
<body>
    <h3>Thankyou <em><?php echo htmlspecialchars($name);?> </em><br><br>  Welcome to our website!</h3>
    <h6>
        <em>do not worry your personal details are saved only till this session lasts and will be deleted once the session ends. It's stored at the server temporarily.</em>
    </h6>
<hr>
    <a href="page1.php">Goto page1</a><br>
    <a href="page2.php">Goto page2</a><br>
    <a href="page4.php">Goto page4</a>
</body>
</html>