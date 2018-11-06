<?php 
    #$_SERVER superglobal

    #server array
    // echo '<br>----server information----<br><br>';

        $server = [
            'Host Server Name' => $_SERVER['SERVER_NAME'],
            'Host Header' => $_SERVER['HTTP_HOST'],
            'Server Software' => $_SERVER['SERVER_SOFTWARE'],
            'Document Root' => $_SERVER['DOCUMENT_ROOT'],
            'Server IP' => $_SERVER['SERVER_ADDR'],
            'Current Page' => $_SERVER['PHP_SELF'],
            'Script Name' => $_SERVER['SCRIPT_NAME'],
            'Absolute Path' => $_SERVER['SCRIPT_FILENAME'],
        ];


        // foreach ($server as $s=>$data){
        //     echo "$s : $data";
        //     echo '<br>';
        // }

// echo '<br>----client information----<br><br>';
    #client array
        $client = [
            'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
            'Client IP' => $_SERVER['REMOTE_ADDR'],
            'Remote Port' => $_SERVER['REMOTE_PORT'],
        ];

        // foreach ($client as $c=>$data){
        //     echo "$c : $data";
        //     echo '<br>';
        // }

        // foreach ($_SERVER as $c=>$data){
        //     echo "$c : $data";
        //     echo '<br>';
        // }

      

?>