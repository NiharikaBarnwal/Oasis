<?php
session_start();
$user_id =$_REQUEST['user_id'];
$password1 =$_REQUEST['password'];

include 'connection.php';

$check_qry = "SELECT * FROM user where user_id=? and pass=?";

$stmt = mysqli_prepare($connection,$check_qry);
mysqli_stmt_bind_param($stmt,'ss',$user_id,$password1);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);    //not required for insert,delete,update 

//$result = mysqli_query($connection,$check_qry);     -> This is not secure


$rows_result = mysqli_num_rows($result);  //no. of results returned

if($rows_result == 1)
{
    $row = mysqli_fetch_array($result);
    $_SESSION['user_name'] = $row['name'];
    $_SESSION['loggedin'] = true;
    header('location:home.php');
}
else
    $_SESSION['loggedin'] = false;
    header('location:home.php');
?>