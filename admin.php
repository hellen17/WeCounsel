<?php
session_start();
//get values
$user=$_POST['user'];
$password=$_POST['password'];

//prevent mysql injection
include("connect.php");
$user = $mysqli->real_escape_string($_POST['user']);
$password = $mysqli->real_escape_string($_POST['password']);

//connect to database
//mysqli_connect("localhost","root","");
//mysql_select_db("bluserv");

//Query datbase for user
$result=$mysqli->query("select *from admin where user ='$user' and password ='$password'") or die("failed to query database" .mysqli_error());
$row=mysqli_fetch_array($result);
if($row['user']==$user && $row['password'] ==$password){
	echo "Login successful";
	$_SESSION['user']=$row['user'];
	/*$_SESSION['email']=$row['email'];*/
	$_SESSION['password']=$row['password'];
header("location: Homeadmin.php");
}
else{
//echo "<script type='text/javascript'> alert("Login unsuccessful");</script>";
//header("location: login.html");
header( "refresh:0.5; url=admin.html" );
$message = "Invalid username or password";
echo "<script type='text/javascript'>alert('$message');</script>";

}