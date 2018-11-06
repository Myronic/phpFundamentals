<?php include 'server-info.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
    <style>
     li{
        white-space: wrap;
        overflow: hidden;
        text-overflow: ellipsis;
          word-wrap: break-word;
     }

     li:hover {
         overflow: visible;
     }
    </style>
</head>
<body>
<hr>
    <div class="container-fluid">
            <div class="row justify-content-around">
                <div class="col-xl-7 col-lg-8 col-md-10 col-sm-12 col-xs-12">
                    <div class="jumbotron bg-danger ">
                        <h1 class="text-white text-center "><u>SERVER FILE INFO</u></h1><br><hr>
                        <?php if($server): ?>
                            <ul class="list-group">
                                <?php   foreach ($server as $s=>$data): ?>                                    
                                        <li class="list-group-item text-white bg-secondary t"><strong><?php echo "$s :"; ?>  </strong></li>
                                        <li class="list-group-item t"><em><?php echo $data?> </em></li>                                                       
                                <?php endforeach;?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8 col-md-10 col-sm-12 col-xs-12">
                    <div class="jumbotron bg-primary ">
                        <h1 class="text-white text-center "><u>CLIENT INFO</u></h1><br><hr>
                        <?php if($client): ?>
                            <ul class="list-group">
                                <?php   foreach ($client as $c=>$data): ?>
                                    
                                        <li class="list-group-item text-white bg-dark"><strong><?php echo "$c :"; ?>  </strong></li>
                                        <li class="list-group-item"><em><?php echo $data?> </em></li>
                                                        
                                <?php endforeach;?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
           

            

            <div class="jumbotron bg-success ">
                <h1 class="text-white text-center "><u>ALL INFO</u></h1><br><hr>
                <?php if($_SERVER): ?>
                    <ul class="list-group">
                        <?php   foreach ($_SERVER as $c=>$data): ?>
                            
                                <li class="list-group-item text-white bg-dark"><strong><?php echo "$c :"; ?>  </strong></li>
                                <li class="list-group-item"><em><?php echo $data?> </em></li>                         
                        <?php endforeach;?>
                    </ul>
                <?php endif; ?>
            </div>
    </div>

    <!-- <p class="text-primary">.text-primary</p>
<p class="text-secondary">.text-secondary</p>
<p class="text-success">.text-success</p>
<p class="text-danger">.text-danger</p>
<p class="text-warning">.text-warning</p>
<p class="text-info">.text-info</p>
<p class="text-light bg-dark">.text-light</p>
<p class="text-dark">.text-dark</p>
<p class="text-muted">.text-muted</p>
<p class="text-white bg-dark">.text-white</p> -->
    
</body>
</html>