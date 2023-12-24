<?php 
$user_email=$_REQUEST['email'];
$user_password=$_REQUEST['password'];
$host="localhost";
$user="root";
$password="";
$db="test";
$conn=mysqli_connect($host,$user,$password,$db);
$sql = "SELECT * FROM userinfo WHERE email = '$user_email'";
$result = $conn->query($sql);
if ($result) {
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        if ($user_password == $data['password']) {
           echo('<h1 style=color:green>Logged in successfully</h1>');
        } else {
            echo('<h1 style=color:red>incorrect password</h1>');
        }
    } else {
        echo('<h1 style=color:red>user email not found</h1>');
    }
} else {
    echo "Error executing query: " . $conn->error;
}
?>