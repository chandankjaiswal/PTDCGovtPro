<?php

session_start();
header('location:adminlogin.php');

$con= mysqli_connect('localhost','root');

if($con){
	echo "connection successful";

}
else {
	echo "no connection";
}
mysqli_select_db($con,'ptdc');

$First_Name=$_POST['F_name'];
$Last_Name=$_POST['L_name'];
$Address=$_POST['address'];
$Email=$_POST['email'];
$Mobile=$_POST['mobile'];
$Gender=$_POST['gender'];
$Country=$_POST['country'];
$pass=$_POST['password'];


$q= " select * from user where email ='$Email' AND password='$pass' ";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1)
{
	echo "duplicate data";
}else
{
	$qy = "insert into user(f_name,l_name,address,email,mobile,sex,country,password) values ('$First_Name','$Last_Name','$Address','$Email','$Mobile','$Gender','$Country','$pass')";
	mysqli_query($con,$qy);
	echo "Successfully registered";
}
?>