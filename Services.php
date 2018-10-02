<!DOCTYPE html>
<html>
<head>
	<title>Services</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="icon" type="image/jpg" href="logo.jpg" ><!-- favicon -->
	<script src="jquery-3.3.1.js"></script>
	<script src="bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="services.css">
	<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css"> 
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-targe="navbar-collapse-main">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><img  src="logo.jpg" id="logo"></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse-main">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="Home.html" ">Home</a></li>
        <li><a href="Registration.html">Join Us</a></li>
        <li><a href="Services.php" class="active">Connect</a></li>
        <li><a href="Feedback.html">Feedback</a></li>

			</ul>
		</div>
	</div>
</nav>
<!-- Welcome the user -->
<div class="welcome" style="text-align: left;
  color: black;
  padding-top: 150px;
  font-weight: bolder;
  font-size: 20px;">

<?php
//start the session
session_start();
include("connect.php");



/*

  Having made the connection to the database
  - Retrieve the data from the db
  - Prefill your divs
  
  let consultant = [
    name: String
    title: String
    imageUrl: String
    rating: Int
    twitterUrl: String
    facebookUrl: String
    dribbleUrl: String
    linkedinUrl: String
  ]

    var dataArray<Consultant> [array of retrieved consultants from the database]
    where n is index

    template: 
    '<div class="gallery">
     <img src="${ dataArray[n].imageString }" alt="Therapist" style="width:100%">
      <h1>${ dataArray[n].consultantsName }</h1>
      <p class="title">${ dataArray[n].title }</p>
      <p>${ dataArray[n].rating }</p>
      <div style="margin: 24px 0;">
        <a href="${ dataArray[n].dribbleLink }"><i class="fa fa-dribbble"></i></a> 
        <a href="${ dataArray[n].twitterLink }"><i class="fa fa-twitter"></i></a>  
        <a href="#"><i class="fa fa-linkedin"></i></a>  
        <a href="#"><i class="fa fa-facebook"></i></a> 
     </div>
     <p><button>Chat</button></p>
    </div>'


*/




if(isset($_SESSION['user'])) //check if the user is logged in
{
  show_logged_in_user_info(); //show the info reserved for logged in users
  
  //show the restricted content
//   echo "<br><br>You can change your account details here";
}
else
{
  //show error message that the user has to be logged in

echo '<script type="text/javascript"> alert("Please log in first to view this page");
</script>';
header( "refresh:0.5; url=Registration.html" );
  // echo "Please log in first to view this page";
  // echo "<br>";
  // echo "<a href='login.html'>Login</a>";
/*  die("Please log in first");
  echo "<br>";
  echo "<a href='login.html'>Login</a>";*/
}


//the logged in user info function
function show_logged_in_user_info()
{
  if(isset($_SESSION['user']))
  {
    echo "Welcome ".$_SESSION['user'];
    echo " | <a href='logout.php'>Logout</a>";
    // echo "<br/>Email: ".$_SESSION['email'];
    // echo "<br/>Password: ".$_SESSION['password'];echo "<br>";
/*    echo"<a href='changepass.php'>Change Password?</a> | <a href='logout.php'>LOGOUT</a>";*/
  }

}

?>

</div>
<!-- <div class="alt">
  <SCRIPT LANGUAGE="JavaScript">

{
var name = prompt ('Select your prefered username','');
var color = prompt ('Color name','');
document.write("<CENTER><FONT FACE=ARIAdL,VERDANA COLOR="+color+" SIZE=5>Welcome To WeCounsel "+name+".</FONT><HR NOSHADE WIDTH=450></CENTER><P>")
}

</SCRIPT>

  
</div> -->
<div class="content" style="font-family: 'Amita'; font-size: 30px;">
				<h3>Select from our various list of helpers</h3>
			</div>
<h2 style="text-align:center">Profile Cards</h2>

<div class="container">
	<div class="gallery">
	  <img src="counsellor1.png" alt="Therapist" style="width:100%">
  <h1>Kate Robins</h1>
  <p class="title">Professional Therapist</p>
  <p>Rating</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Chat</button></p>
</div>
<div class="gallery">
	 <img src="counsellor1.png" alt="Therapist" style="width:100%">
  <h1>Susan Awino</h1>
  <p class="title">Professional Therapist</p>
  <p>Rating</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Chat</button></p>
</div>
<div class="gallery">
 <img src="counsellor1.png" alt="Therapist" style="width:100%">
  <h1>Charles Joseph</h1>
  <p class="title">Fellow Peer</p>
  <p>Rating</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Chat</button></p>
</div>
<div class="gallery">
 <img src="counsellor1.png" alt="Therapist" style="width:100%">
  <h1>John Doe</h1>
  <p class="title">Professional Therapist</p>
  <p>Rating</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Chat</button></p>
</div>
<div class="gallery">
 <img src="counsellor1.png" alt="Therapist" style="width:100%">
  <h1>Kolins Jerop</h1>
  <p class="title">Fellow Peer</p>
  <p>Rating</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Chat</button></p>
</div>
<div class="gallery">
 <img src="counsellor1.png" alt="Therapist" style="width:100%">
  <h1>Melissa Koech</h1>
  <p class="title">Professional Therapist</p>
  <p>Ratings</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Chat</button></p>
</div>
<div class="gallery">
 <img src="counsellor1.png" alt="Therapist" style="width:100%">
  <h1>Jack Peters</h1>
  <p class="title">Fellow peer</p>
  <p>Rating</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Chat</button></p>
</div>
<div class="gallery">
 <img src="counsellor1.png" alt="Therapist" style="width:100%">
  <h1>Josephine Awino</h1>
  <p class="title">Professional Therapist</p>
  <p>Rating</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Chat</button></p>
</div>
<div class="gallery">
 <img src="counsellor1.png" alt="Therapist" style="width:100%">
  <h1>Julie Wangeci</h1>
  <p class="title">Professional Therapist</p>
  <p>Rating</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Chat</button></p>
</div>

</div>
</body>
</html>