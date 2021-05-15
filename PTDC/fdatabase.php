<?php

session_start();
header('location:feedback.php');

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
$Mobile_Number=$_POST['Mobile'];
$Email_Id=$_POST['email'];
$Country=$_POST['country'];
$Comments=$_POST['comment'];


$q= " select * from feedback where email ='$Email' AND password='$pass' ";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1)
{
	echo "duplicate data";
}else
{
	$qy = "insert into feedback(f_name,l_name,mobile,email,country,comment) values ('$First_Name','$Last_Name','$Mobile_Number',$Email_Id',$Country','$Comments')";
	mysqli_query($con,$qy);
	echo "Successfully registered";
}
?>