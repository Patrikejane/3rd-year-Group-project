<?php
include('db.php');
session_start();
$mail_check=$_SESSION['email'];

$ses_sql = mysqli_query($db,"SELECT email FROM user WHERE email='$mail_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_user=$row['email'];

if(!isset($mail_check))
{
header("Location: signin.php");
}
?>