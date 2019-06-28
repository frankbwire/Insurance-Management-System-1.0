<?php
session_start();
?>
<!--=======User Policy Registration=======-->
<?php
require 'connect.php';
//variable declaration
$fname='';
$lname='';
$dob='';
$email='';
$address='';
$city='';
$country='';
$ptype='';
$pricing='';
$annual='';
$idno='';
$phone='';
$gender='';

    //get values
if(isset($_POST['submitreg'])){
$fname=mysqli_real_escape_string($conn,$_POST['fname']); 
$lname=mysqli_real_escape_string($conn,$_POST['lname']);
$dob=mysqli_real_escape_string($conn,$_POST['dob']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$city=mysqli_real_escape_string($conn,$_POST['city']);
$country=mysqli_real_escape_string($conn,$_POST['country']);
$ptype=mysqli_real_escape_string($conn,$_POST['ptype']);
$pricing=mysqli_real_escape_string($conn,$_POST['pricing']);
$annual=mysqli_real_escape_string($conn,$_POST['annual']);
$idno=mysqli_real_escape_string($conn,$_POST['idno']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$gender=mysqli_real_escape_string($conn,$_POST['gender']);

    //post to database
$sql="INSERT into policy_registration (first_name,last_name,dob,email,address,city,country,policy_type,policy_pricing,annual_income,id_number,phone_number,gender) VALUES('$fname','$lname','$dob','$email','$address','$city','$country','$ptype','$pricing','$annual','$idno','$phone','$gender')";
$query=mysqli_query($conn,$sql);
      if(!$query){
        die ('could not submit data'. mysqli_error($conn));
    }
    echo 'successfull';

}

?>
<!--=======End User Policy Registration=======-->
<!--=======User Sign Up/ Registration=========-->
<?php
// REGISTER USER
$uname='';
$umail='';
$pass1='';
$pass2='';
$errors=array();

if (isset($_POST['usubmit'])) {
// receive all input values from the form
$uname = mysqli_real_escape_string($conn, $_POST['uname']);
$umail = mysqli_real_escape_string($conn, $_POST['umail']);
$pass1 = mysqli_real_escape_string($conn, $_POST['pass1']);
$pass2 = mysqli_real_escape_string($conn, $_POST['pass2']);
// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array
if (empty($uname)) { array_push($errors, "Username is required"); }
if (empty($umail)) { array_push($errors, "Email is required"); }
if (empty($pass1)) { array_push($errors, "Password is required"); }
if ($pass1 != $pass2) {
array_push($errors, "The two passwords do not match");
};
// first check the database to make sure
// a user does not already exist with the same username and/or email
$sql = "SELECT * FROM users WHERE username='$uname' OR email='$umail' LIMIT 1";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
if ($user) { // if user exists
if ($user['email'] === $umail) {
array_push($errors, "email already exists");
}
};
// Finally, register user if there are no errors in the form
if (count($errors) == 0) {
$password = md5($pass1);//encrypt the password before saving in the database
$query = "INSERT INTO users (username, email, password)
VALUES('$uname', '$umail', '$password')";
$retval=mysqli_query($conn, $query);
  if(!$retval){
    die ('error'. mysqli_error($conn));
  }
  $_SESSION['uname'] = $uname;
  	$_SESSION['success'] = "You are now logged in";  
header('location: index.php');
}
}
?>
<!--======End User Sign Up/ Registration======-->
