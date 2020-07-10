<?php

$con= mysqli_connect('localhost','root',"", "police app");

if($con)
{
	echo "Connection successful";
}
else
{
	echo "no connection";
}
mysqli_select_db($con,'details');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment= $_POST['comment'];

$query = "insert into userdetail (user, email,  mobile,comment) values ('$user','$email','$mobile','$comment')";

mysqli_query($con,$query);

header('location:index.php'); 
