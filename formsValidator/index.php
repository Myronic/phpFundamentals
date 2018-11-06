<?php
  //message vars
  $msg= '';
  $msgClass= '';
  $message="no message typed";
  
  //check for submit
  // htmlspecialchars() ignores special html chars like tags etc
  //(filter_has_var(INPUT_POST, 'submit') used to Check if the input variable "submit" is sent to the PHP page, through the "post" method.. same can be used for get post cookie server env... note that this function doesnot work on live values of array that are updated so better use isset.
  if(filter_has_var(INPUT_POST, 'submit')){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_REQUEST['message']);

    //check req fields
   
        

        if(!empty($email) && !empty($name) && !empty($message) ){
          if (!preg_match("/^[a-zA-Z ]*$/",$name)) { 
            $msg = 'invalid name, only letters and white space allowed';
            $msgClass = 'alert-danger';
          }

          else if(filter_var($email,FILTER_VALIDATE_EMAIL)=== false){
                //flase
                $msg = 'invalid email';
                $msgClass = 'alert-danger';
          }

            else{
              //passed
              $m="your form has been submitted!";
            echo "<script type='text/javascript'>alert('$m');</script>";
            $name=null;
            $email=null;
            $message=null;

            /*
            $toEmail= 'myron.c@somaiya.edu';
            $subject = 'Contact request from '.$name;
            $body = "<h2>CONTACT REQUEST</h2>
                      <h3>Name:<p>.$name.</p></h3>
                      <h3>Email:<p>.$email.</p></h3>
                      <h3>Message:<p>.$message.</p></h3>
            ";

            $headers = "MIME-Version 1.0" ."\r\n";
            $headers .="Content-Type:text/html;charset=UTF-8" ."\r\n";

            //additional headers
            $headers .= "From: ".$name. "<".$email.">". "\r\n";

            if(mail($toEmail,$subject,$body,$headers)){
              $msg = "your email has been sent!";
              $msgClass  = "alert-success";
            }

            else{
              $msg = "your email was not sent!";
              $msgClass  = "alert-danger";
            }
            */
            }
        
          }


          else if(!empty($email) || !empty($name) || !empty($message) ){
          
            if(empty($name)){
              $msg = 'name field blank. Please fill it.';
              $msgClass = 'alert-danger';
            }
            
            else if(empty($email)){
              $msg = 'email field blank. Please fill it.';
              $msgClass = 'alert-danger';
            }

            else if(empty($message)){
              $msg = 'message field blank. Please fill it.';
              $msgClass = 'alert-danger';
            }
        }
        
          else{
              $msg = 'please fill in all fileds!';
              $msgClass = 'alert-danger';
            //   echo "<script type='text/javascript'>
            //   document.getElementById('name').value = 'yo';
            // </script>";      
          }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>contact us</title>
     <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
     <link rel="stylesheet" href="style.css">
     <link href="https://fonts.googleapis.com/css?family=Revalia" rel="stylesheet">  
</head> 

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">My Website</a>
  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About us</a>
      </li>
    </ul>
  </div>
</nav>



<br>
<br>
    <div class="container bg-secondary" style="max-width:400px;color:white">

      <?php if($msg != ''):?>
        <div class="<?php echo $msgClass;?>"><?php echo $msg;?></div>
      <?php endif;?>


      <form class="my-2 my-lg-0" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" id="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : '';?>">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : '';?>" >
        </div>
        <div class="form-group">
          <label>Message</label>
          <textarea name="message" class="form-control"><?php echo isset($_POST['mesage']) ? $message : "";?></textarea>
         <?php  var_dump($message);?>
        </div>
        <br>

         <input type="submit" class="btn btn-primary btn-lg" name="submit" value="submit">
         <br><br>
    </form>
    </div>







</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</html>