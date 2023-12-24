<?php 
$user_email=$_REQUEST['email'];
$user_password=$_REQUEST['password'];
$host="localhost";
$user="root";
$password="";
$db="test";
$conn=mysqli_connect($host,$user,$password,$db);
$insert="insert into userinfo values('$user_email','$user_password')";
mysqli_query($conn,$insert);
if($conn){
echo('<h1 style=color:green>registered successfully</h1>');
}else{
	echo('<h1 style=color:red>registered failed</h1>');
}

?>