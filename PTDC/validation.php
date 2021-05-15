<?php

session_start();

$con= mysqli_connect('localhost','root');

if($con){
	echo "connection successful";

}
else {
	echo "no connection";
}
mysqli_select_db($con,'ptdc');

$email=$_POST['email'];
$pass=$_POST['pass'];

$q= " select * from User where username ='$email' AND password='$pass' ";   

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1)
{
	$_SESSION['email'] = $email;
     header('location:main.php');
}else
{
	header('location:adminlogin.php');
}
?>