<?php
   echo '<h3>dates:</h3>';
   echo date('D d M Y').'<br>';
    echo date('d/m/Y').'<br>';
    echo date('d:m:Y').'<br>';
    echo date('d-m-Y').'<br>';

    echo date('d').'<br>'; //date dd
    echo date('m').'<br>'; //month mm 
    echo date('y').'<br>'; //year yy
    echo date('D').'<br>'; //day sun
    echo date('M').'<br>'; //month nov
    echo date('Y').'<br>'; // year yyyy
    echo date('l').'<br>'; //day of the week


    echo '<h3>time:</h3>';
    echo 'before setting timezone: ';
    echo date('h:i:sa').'<br>';
    //set time zone
    date_default_timezone_set('Asia/Kolkata');
    
    echo 'after setting timezone: ';
    echo date('h:i:sa').'<br>';
   

    echo date('h').'<br>';      //hour
    echo date('i').'<br>';      //min
    echo date('s').'<br>';      //sec
    echo date('a').'<br>';      //am/pm
    echo date('A').'<br>';      //PM/PM

    $timeStamp = mktime(14,20,45,7,2,1998);
  //  echo $timeStamp;
  echo date('d/m/Y h:i:sA',$timeStamp);

  $timeStamp2 = strtotime('22 dec 2018 2:45pm');
  $timeStamp3 = strtotime('18:30:45 aug 29 2016');
  $timeStamp4 = strtotime('tomorrow 10:30');
  $timeStamp6 = strtotime("+1 year 2 months 1 week 2 days 4 hours 30 minutes 2 seconds"); //adds 1 year 2 months 1 week 2 days 4 hours 30 minutes 2 seconds
  $timeStamp5 = strtotime('+2 months');  //works for +/- days months years

  echo '<br><br>22 dec 2018 2:45pm : '.date('d/m/Y h:i:sA', $timeStamp2);
  echo '<br><br>18:30:45 aug 29 2016 : '.date('d/m/Y h:i:sA', $timeStamp3);
  echo '<br><br>tomorrow 10:30 : '.date('d/m/Y h:i:sA', $timeStamp4);
  echo '<br><br>current date : '.date('d/m/Y h:i:sA');
  echo '<br><br>+2 months : '.date('d/m/Y h:i:sA', $timeStamp5);
  echo '<br><br>adding 1 year 2 months 1 week 2 days 4 hours 30 minutes 2 seconds to current date : '.date('d/m/Y h:i:sA', $timeStamp6);

 echo ' <br><br>for more go to http://php.net/manual/en/function.date.php';


?>