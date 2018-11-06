<?php 
    $loggedIn = false;
    // if($loggedIn){
    //     echo "youre logged in<br>";
    // }else{
    //     echo "youre not logged in<br>";
    // }

    echo ($loggedIn) ? "you're logged in<br>":"youre not logged in<br>";
    $age = 10;
    $score = 500;

    echo '<br>your score is: '.($score>300 ? ($age > 15 ? 'average': 'excellent' ):($age > 15 ? 'horrible': 'average' ));
        

?>
        <!-- <div>
            <?php if($loggedIn) {?>
                <h1>Welcome back</h1>
            <?php }else { ?>  
                <h1>sign in first</h1>
            <?php } ?>  
        </div> -->

        <div>
        <?php if($loggedIn):?>
                <h1>Welcome back</h1>
            <?php else:?>  
                <h1>sign in first</h1>
            <?php endif;?>  
        </div>

        <div>
        <?php 
            $arr=array(1,2,3,4,5);
        foreach($arr as $a):?>
                <h1><?php echo $a*$a?></h1>
            <?php endforeach;?>  
        </div>




