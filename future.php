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
<li><a href="#">Future Demands </a></li>
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
<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
            <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout&nbsp;&nbsp;</a></li>
</ul>

</nav><span "padding-top: 10px;">

<div class="material" style="background-color:#361231; color:#fff;">  
                                                      <p  style="align:center"><h1>Future Demands</h1></p>
  <br>
<p><i>US-based Upwork, which claims to be the world's largest freelancing website, has released hottest skills in the US freelance job market. The job market for 20 fastest-growing freelance skills in the December quarter experienced more than 100 per cent year-over-year growth with the top 10 experiencing more than 200 per cent year-over-year growth. Freelancers are earning more than $1 billion annually via its website, Upwork said.
<br>
<br>
<br>
Tech skills dominated the list with natural language processing taking the top spot. "As 
products utilizing intelligent, voice-activated assistants like Amazon Echo and Google Home see increased adoption, natural language processing took the #1 spot on the list of fastest-growing skills. Developers are leveraging development kits to build new skills and products," the jobs website said in a statement. Tech skills, including data science, engineering, IT and development skills account for nearly two-thirds (65 per cent) of the top 20 fastest-growing skills.
The Upwork Skills Index calculates year-over-year growth rates based on freelancer billings through Q4 or December quarter of 2016 versus Q4 of 2015.
User experience design has made to the list for three straight quarter. Swift, Tableau, MySQL programming and Machine learning, all included in the Q3 2016 Skills Index, continued to see rapid growth in Q4 as well.
<br>
<br>
New skills such as 3D rendering, information security and R development earned spots in the top 20, while skills such as MySQL development, AngularJS and Node.js development continued to be in demand.
<br>
<br>
Marketing skills account for nearly a third (30 per cent) of the top 20 skill. In addition to new, higher-level skills such as business consulting and brand strategy accelerating, tactical skills such as Instagram marketing, and social media management are also seeing rapid growth, Upwork said.

Here are the top 20 fastest-growing skills of Q4 of 2016, according to Upwork

1) Natural language processing
2) Swift
3) Tableau
4) Amazon Marketplace Web Services (MWS)
5) Stripe
6) Instagram marketing
7) MySQL programming
8) Unbounce
9) Social media management
10) AngularJS
11) Business consulting
12) Machine learning
13) Brand strategy
14) 3D rendering
15) Information security
16) R development
17) Node.js development
18) User experience design
19) Bluetooth
20) Zendesk customer support

"Freelancers represent the future of not only the U.S. workforce but also of many of the innovations we're seeing globally," said Upwork CEO, Stephane Kasriel. "The skills on this list are a snapshot of new and emerging technologies that will shape our world and create more job opportunities."

For India's nearly $150 billion information technology sector, exports account for the bulk of the revenues. The growth rate of domestic IT companies has slowed down amid uncertain global markets. But IT players remain optimistic on domestic initiatives like Digital India and Start-Up India and are eyeing the Budget for further boost to the sector.
</i></p>
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
