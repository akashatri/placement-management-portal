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
<link rel="stylesheet" type="text/css" href="index.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
<div class="back">
<nav class="navbar navbar-inverse navbar-static-top" role="navigation" >
<ul class="nav navbar-nav">
<li class="active"><a href="#">HOME</a></li>
<li class="pannelplacement"> <a  data-toggle="dropdown" href="#">COMPANIES</a>
<ul class="dropdown-menu">
<li><a href="information.php">Information </a></li>
<li><a href="future.php">Future Demands </a></li>
<li><a href="recruitment.php">Recruitment</a></li>
</ul>
</li>
<li class="pannelmedicine"> <a href="interview.php">INTERVIEWS!</a></li>
<li class="pannelmore"> <a data-toggle="dropdown" href="#">GUIDE ME</a>
<ul class="dropdown-menu">
<li><a href="#">CONTRIBUTE!!</a></li>
<li><a href="developer.php">DEVELOPER</a></li>
<li><a href="https://www.facebook.com/">FOLLOW US</a></li>
</ul>
</li>
</ul>
<ul class="nav navbar-nav navbar-right">
<<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
<li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout&nbsp;&nbsp;</a></li>
</ul>

</nav><span "padding-top: 10px;">
<div class="hed"><h2><I><B> Placement Management System Welcomes YOU !!!</B></I></h2></div>
<div class="bck">
<p class="topp"><b<br><br><br><br></b></p>
<a href="aboutdonateus.php">

<div class="quot">
<table >
    <tr >
        <td ><img class="qoutei" src="main2.jpg" height="298px" width="230" ></td>
        <td><p class="t"><I>
"The major objective of campus placement is to identify the talented and qualified professionals before they complete their education.
 It provide employment opportunities to the students who are perusing or in the final stage of completing the course.
 This process reduces the time for an industry to pick the candidates according to their need.
 It is a cumbersome activity and hence majority of the companies find it difficult to trace the right talent.
 Many students do not understand the importance of placement training that is being imparted, whether it is an aptitude training or soft skills. 
 They show the least interest in this due to various factors viz., projects, assignments or more of activities loaded by the colleges as part of their 
 curriculum thinking that it is not useful. It is the responsibility of the companies training on placement to make the students equipped on all aspects of career development 
 along with creating a very good impact in them which makes them feel every minute they spend in the placement training session is worth being there and will help them in 
 getting placed in their dream companies."
</I></p></td>
    </tr>
</table>

</div>
<div style="margin-top:-4px;color:#fff;font-family: Arial, Helvetica, sans-serif;">
         <a href="#"> <button>BACK TO TOP</button></a>
     
	 </div>
	 </div>
	 
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


