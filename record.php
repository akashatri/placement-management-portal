<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location:loginpage.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Placement Management System</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="information.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="back">
<nav class="navbar navbar-inverse navbar-static-top" role="navigation" >
<ul class="nav navbar-nav">
<li class="active"><a href="index.php">HOME</a></li>
<li class="pannelplacement"> <a  data-toggle="dropdown" href="#">COMPANIES</a>
<ul class="dropdown-menu">
<li><a href="information.php">Information </a></li>
<li><a href="future.php">Future Demands </a></li>
<li><a href="recruitment.php">Recruitment</a></li>
</ul>
</li>
<li class="pannelmedicine"> <a href="interview.php">INTERVIEWS!</a></li>
<li class="pannelabout"> <a  href="#">COLLEGE RECORD</a></li>
<li class="pannelmore"> <a data-toggle="dropdown" href="#">GUIDE ME</a>
<ul class="dropdown-menu">
<li><a href="contribute.php">CONTRIBUTE!!</a></li>
<li><a href="developer.php">DEVELOPER</a></li>
<li><a href="https://www.facebook.com/">FOLLOW US</a></li>
</ul>
</li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
            <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout&nbsp;&nbsp;</a></li>
</ul>

</nav><span "padding-top: 10px;">

























<footer class="footer">
<div class="follow"><h4><b>Follow us to get more updates:</b></h4></div> <br>

    <div class="container text-center">
        <a href="https://www.facebook.com"><i class="fa fa-facebook-square"style="font-size:24px;color:#3b5998" aria-hidden="true"></i></a>
        <a href="https://twitter.com/login"><i class="fa fa-twitter-square"style="font-size:24px;color: #0084b4"></i></a>
        <a href="wwww.linkdin.com"><i class="fa fa-linkedin-square"style="font-size:24px;color: ##0077B5"></i></a>
        <a href="https://plus.google.com/"><i class="fa fa-google-plus-square"style="font-size:24px;color: #db4a39"></i></a>
        
    </div>
	
</footer>
  

  



</body>
</html>
