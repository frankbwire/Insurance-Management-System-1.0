
<!--Copyrights author: Frankline Bwire-->
<!--insurance management system-->
<!--theme copyrights Colorlib-->
<?php
require 'connect.php';
//variable declaration
$comment='';
$comname='';
$comemail='';
$errors=array();
//post comments to db when submit
if(isset($_POST['submitcom'])){
$comment=mysqli_real_escape_string($conn,$_POST['comment']); 
$comname=mysqli_real_escape_string($conn,$_POST['comname']);
$comemail=mysqli_real_escape_string($conn,$_POST['comemail']);
    //insert data to database
$sql="insert into comments (email,name,comment) values('$comemail','$comname','$comment')";
$query=mysqli_query($conn,$sql);
if(!$query){
        die ('__could not submit data__'. mysqli_error($conn));
    }
    echo 'successfull';    
}
?>