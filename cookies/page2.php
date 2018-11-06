<?php 
    //set cookie
    setcookie('username','$newUsername', time()+600); //changed username for 10mins
    //delete cookie
    //setcookie('username','$newUsername', time()-4200); //set expiry 3600+above 600 sec is 4200 sec old hence it expired the moment it was created.
   if(count($_COOKIE>0)){
        echo print_r($_COOKIE);
        echo '<br>'." there are ".count($_COOKIE)." cookies saved";
   }
   
    if(isset($_COOKIE['username'])){
         echo '<h1>User with username '.$_COOKIE['username'].' is saved to cookies<br></h1>';
         echo '<br>go to inspect element>application>cookies>localstorage to view all data saved in cookies.';
         echo   '<br>go to browser cookies and see the cookies saved under localhost to see complete details.';
    }else{
        echo '<h1>User data is not saved to cookies</h1>';
    }
?>