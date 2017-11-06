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
<link rel="stylesheet" type="text/css" href="recruitment.css">
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
<li><a href="#">Recruitment</a></li>
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

<h2 class="sh">Recruitment Process</h2>

<div class="intro">
<p class="intro1">The recruitment phase of the hiring process takes place when the company tries to reach 
    a pool of candidates through job postings, job referrals, advertisements, college campus 
    recruitment, etc. Candidates who respond to these measures then come in for interviews and
     other methods of assessment. Employers may check the background of prospective employees, 
     as well as check references</p>

</div>
<div class="vid">
<iframe width="750" height="300" src="https://www.youtube.com/embed/DZYXleNfqc0" frameborder="0" gesture="media" allowfullscreen></iframe>
</div>
<div class="step">
    <h4 class="sh2">Myths student should cleared:  </h4>
    <ul style="list-style-type:square">
        <li class="hed">Training:</li>
        <p class="exp">People think that these organizations are good for freshers because they get a lot of training which they wouldn't get in other organizations. I must remind such people that attending training programmes is not equivalent to learning. Indeed these organizations provide a lot of training to freshers but only about 1% of the trainees actually absorb the knowledge. The 1% that do absorb the training do not stick to the organization for a long time because sooner or later they realize that they want to do some real engineering. The figure '1%' isn't merely a guess. This is my observation across various trainee-batches that have been trained in one of these organizations. Think about it. Can you learn a new programming language in just 3 days? If your answer is "no", you shouldn't 
            join one of these organizations. If your answer is "yes", you shouldn't join one of these organizations.</p>
            
       
        
        <li class="hed">Engineering:</li>
        <p class="exp"> One can find engineering problems in these organizations but no trace of engineering. For those of you who work in one of these organizations and are offended by this statement, please go and open your engineering textbooks again. Try to remind yourself what you studied and what you learnt.
             Consider what you do now.</p>
        
        <li class="hed">Engineers:</li>
        <p class="exp">The number of engineers in these organizations are very very few; perhaps only 1 in every 200 is an engineer. This is a guess, albeit not a wild one. This is why there is no engineering in these companies despite the presence of engineering problems. "But isn't the minimum qualification to get a job in one of these organizations bachelor's of engineering?", you might ask. It is. Yes, all of them have a degree in engineering or computers of some sort but only about 1 out of 200 is an engineer. The rest 199 do not understand why a bitcount of 1's complement of bitwise XOR of two variables would give you the number of similar bits in corresponding positions in both variables, why one can not create a POSIX compliant regular expression to match only strings with balanced parentheses, or how to find the shortest chain of connections between two friends in a social network. Note that I have used 'or' as the conjunction and not 'and'. They may be good software users or good "software-tailors" who can create software by stitching together many library functions
             but they aren't engineers.</p>
        
        <li class="hed">Culture:</li>
        <p class="exp">One of the worst cultures you can find in the whole of software industry. Very few are busy trying to learn a few things mentioned in the previous paragraph. Some employees are busy figuring out ways to impress their female colleagues using the resources provided by the organization rather than learning and solving problems in better ways. Others are busy cribbing. Here is a shocking piece of information for those who have never worked for one of these organizations. One can also manage to find mud-slinging in company forums once in a while. Professionalism is at its worst here. But they convince themselves that they are professional because they speak English fluently and know how to wear a tie. Employees feel their salaries are pathetic. 
            I feel they are overpaid. How much should a good software user earn?</p>
            <li class="hed">Onsite:</li>
        <p class="exp">Contrary to the popular belief, the number of trips to foreign lands isn't a measure of one's technical prowess. It is mostly (but not always) a measure of how dispassionate one is about engineering and his profession, and how greedy one can be for wealth. Some of the best engineers I have met in these organizations were never eager to go onsite, never went, joined an organization where they could put their knowledge and skills to better use and then flew to a foreign land because their knowledge, skills and understanding of 
            technology were needed there.</p>
</ul>


















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
