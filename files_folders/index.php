<?php
    $path = "/root/dir1/myfile.php";
    $file = 'file1.txt';
    
    //return filename
    echo basename($path); //echoes myfile.php

    //return filename withour extension
    echo '<br>'. basename($path,'.php'); //echoes myfile


    //return dir name from path
    echo '<br>'. dirname($path); //echoes /root/dir1 

    echo "<br>$file exists ?: ";    //can be used to check if a file or folder of the mentioned name is present or not
    echo (file_exists($file)) ? "yes":"no";

    //gets the absolute path
    echo '<br>real file path: '.realpath($file);

    //is filechecks if file is present or not of that name. checks if it a file or not.
    echo "<br>$file exists ?: ";
    echo is_file($file);

    //writable
    echo "<br>$file writable ?: ";
    echo is_writable($file); //returns 1 if writable . if the file is readonly it wont return anything.

    //readable
    echo "<br>$file readable ?: ";
    echo is_readable($file); //returns 1 if writable . if the file is  not evn readonly it wont return anything.

    //get file size
    echo "<br>$file size : ";
    echo filesize($file).'bytes';


/*
    //create a dir
    mkdir('testing');

    //delete dir
     rmdir('testing'); // deletes if file is empty

    //create a copy of a file
    echo copy('file1.txt','copyfile1.txt');

    //rename a file
    echo rename('copyfile1.txt', 'file2.txt');

    //delete a file
    unlink('file2.txt');

    //read file content n op it
    echo "<br>$file content : ";
    echo file_get_contents($file);

    //write string to file
    $msg="Hello world";
    echo "<br>replace content of $file with \"$msg\" :";
    echo file_put_contents($file,$msg); //echoes filesize after appending $msg

$msg='Goodbye world';
$current = file_get_contents($file);
$current .= ' '.$msg;


echo "<br>replace content of $file with \"$current\" :";
echo file_put_contents($file,$current); //echoes filesize after appending $msg
echo "<br>$file content : ";
echo file_get_contents($file);


//open file for reading
$handle = fopen($file, 'r');
$data =  fread($handle,filesize($file));
echo "<br>fread(): $data";
fclose($handle);
*/

//open file for writing
$fn="filenew.txt";
$handle = fopen($fn, 'w');
$msg= "Myron\n";
fwrite($handle,$msg);
$msg= "Melwyn\n";
fwrite($handle,$msg);
$msg= "Carvalho\n";
fwrite($handle,$msg);
fclose($handle);

$handle = fopen($fn, 'r');
$data =  fread($handle,filesize($fn));
echo "<br>fread(): $data";
?>

