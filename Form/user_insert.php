<?php
include 'connection.php';

echo '<pre>';

print_r($_REQUEST);

$user_id = $_REQUEST['user_id'];
$user_name = addslashes($_REQUEST['user_name']);
$user_gender = $_REQUEST['Gender'];
$user_dob = $_REQUEST['user_dob'];
$email = $_REQUEST['email'];
$user_phone = $_REQUEST['user_phone'];
$pass = $_REQUEST['pass'];


$mode = $_REQUEST['mode'];

if($mode == 'Add') {
    $sql_stmt="INSERT into user values('$user_id','$user_name','$user_gender','$user_dob','$email','$user_phone','$pass')";
}
else{
    $sql_stmt="UPDATE user SET name='$user_name', gender='$user_gender', dob='$user_dob',email='$email',phone='$user_phone',pass='$pass' where user_id='$user_id'";
}

$result = mysqli_query($connection,$sql_stmt);
header('location:home.php');
?>
