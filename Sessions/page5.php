<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>page3</title>
</head>
<body>
   <?php session_destroy();?>
    <h2>            
        <em>Session Successfully Destroyed!</em><br>
        Try other session functions like 
        <br>
        <ul>
            <li>session_abort()</li>       
            <li>session_commit()</li>       
            <li>session_cache_expire()</li>       
            <li>session_cache_limiter()</li>       
            <li>etc...</li>       
        </ul>
    </h2>
<hr>
    <a href="page1.php">Goto page1</a><br>
   <a href="page2.php">Goto page2</a><br>
    <a href="page3.php">Goto page3</a><br>
    <a href="page4.php">Goto page4</a><br>
</body>
</html>
    
