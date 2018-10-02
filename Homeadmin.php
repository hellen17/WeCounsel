<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<style>
		body{
			margin: 0px;
			margin: 0px;
		}
		#header{
			width:100%;
			height: 120px;
			background:black;
			color: white;
		}
		#sidebar{
			width: 300px;
			height: 400px;
			background: #5D9EA2;
			float: left;
		}
		#data{
			height:700px;
			/*background:#ffffff;*/
			background:#ff652f;
			/*background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0.5)),url(texture3.jpg);*/
			color: black;
			font-size: 21px;

			}
		#adminLogo{
				background: white;
				border-radius: 50px;
				height: 90px;

			}
			ul li{
			padding: 20px;	
			border-bottom: 2px solid grey;
			font-weight: bold;
			}
			ul li:hover{
				background:#ff652f;
				color: white;
			}
			a{
				text-decoration: none;
				color: black;
			}
	</style>
</head>
<body>
<div id="header">
	<center><img src="adminavatar.png" alt="adminLogo" id="adminLogo"><br>Welcome to the Admin Panel</center>
	
</div>
<div id="sidebar">
	<ul>
		<li><a href="add.php" target="_blank"> Add Vendor</a></li>
		<li><a href="delete.php" target="_blank"> Delete Vendor</a></li>
		<li><a href="update.php" target="_blank"> Update Vendor</a></li>
		<li> <a href="logout.php" target="_blank">Logout</a></li>
	</ul>
</div>
<div id="data"><br>
	<center><h3>Data available</h3>
	</center>
	
<?php

	error_reporting(0);
    include 'connect.php';
	
	//add error_reporting(0); to remove errors 
	
	
	$sql = "SELECT * FROM counsellors";
	$result = mysqli_query($mysqli, $sql);

 if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
    echo "<center><h4>ID: </h4>" . $row["ID"]. "<br>" . "  Name: " . $row["FullName"].  " <br> " .  "Email: " . $row["email"] .  "<br>" . "Phone: " . $row["phone"]. "<br>" . "Password: " . $row["password"]."<br>" . "Category: " . $row["category"]."<br></center>";
	 }
} else {
    echo "<h3><center>No user data found!<center></h3>";
}
?>

</div>


</body>
</html>