<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location:loginpage.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

function Connect()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "portal";

 
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}
 
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
  <style>
  .form 
  {
      background-color:#ffffff;
      hieght:600px;
      width:700px;
      margin-bottom:80px;
      margin-left:350px;
     padding:20px;
  }
  body
      {
        background-color:#E8E8E8;
          overflow-x:hidden;
      }
  .s{
text-align:center;
margin-left:40px;
  }
  .ic
  {
      text-align:center;
      
  }
  .php
  {
      padding:20px;
  }
  
  </style>
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
<li class="pannelmedicine"> <a href="#">INTERVIEWS!</a></li>
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
<div class="s">
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add your experience</button>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

   
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Share your Interview Experience</h4>
      </div>
      <div class="modal-body">
      <form action="includeinterview.php" method="post" class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="u_email" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10"> 
      <input type="name" class="form-control" name="u_name" id="name" placeholder="Enter Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Company Name:</label>
    <div class="col-sm-10"> 
      <input type="name" class="form-control" name="u_cname" id="name" placeholder="Enter Company Name you sit for interview">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Share Your Experience</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="u_exp" id="name" placeholder="Tell Us!!">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
    </div>

  </div>
</div>
</div>
<div class="php">
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("portal", $connection); // Selecting Database
//MySQL Query to read data
$query = mysql_query("select * from interview", $connection);

?>
</div>
<?php
$rowcount=8;
 $sql="SELECT *from interview ORDER BY id";
 $con=mysqli_connect("localhost","root","","portal");
 if ($result=mysqli_query($con,$sql))
   {
   
   $rowcount=mysqli_num_rows($result);
  
  
   }
 $i=$rowcount;
 while($i>0)
 {
    
$query1 = mysql_query("select * from interview where id=$i", $connection);
while ($row1 = mysql_fetch_array($query1)) {
   
       
      

?>
<div class="form">
<h2 class="ic"> Interview Experience </h2>
<!-- Displaying Data Read From Database -->
<h3>Name:</h3> <?php echo $row1['u_name']; ?>
<span><h3>E-mail:</h3></span> <?php echo $row1['u_email']; ?>
<span><h3>Company Name:</h3></span> <?php echo $row1['u_cname']; ?>
<span><h3>Experience:</h3></span> <?php echo $row1['u_exp']; ?>
</div>
<?php
}
$i--;
 }


?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<?php
mysql_close($connection); // Closing Connection with Server
?>
</div>


<div>

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
