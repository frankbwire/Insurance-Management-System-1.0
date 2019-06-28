<?php
$servername='localhost';
$username='root';
$passwd='';
$dbname='ims';

//connect to server
$conn=mysqli_connect('localhost','root','');

if(!$conn){
    die  ('Error during connection' . mysqli_error());
}

//select database
$db=mysqli_select_db($conn,$dbname);
if (!$db){
    die ('db unsuccessfull'. mysqli_error());
}


?>