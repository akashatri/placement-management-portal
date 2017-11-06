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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="information.css">
  <style>
	  .sp
	  {
		  padding-left:50px;
		  
		  
	  }
	  body
	  {
		  overflow-x:hidden;
	  }
	  </style>
</head>
<body  data-spy="scroll" data-target="#myScrollspy" data-offset="15" data-spy="affix" >
<div class="back">
<nav class="navbar navbar-inverse navbar-static-top" role="navigation" >
<ul class="nav navbar-nav">
<li class="active"><a href="index.php">HOME</a></li>
<li class="pannelplacement"> <a  data-toggle="dropdown" href="#">COMPANIES</a>
<ul class="dropdown-menu">
<li><a href="#">Information </a></li>
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
<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
            <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout&nbsp;&nbsp;</a></li>
</ul>

</nav><span "padding-top: 10px;">

<div class="container-fluid" style="background-color:#361231;color:#fff;height:220px;">
  <h1>Companies Requirements</h1>
 
  <p class="text"><I></b>Talent assessments, also called pre-employment tests or employment screening tests, are used to help employers identify candidates that will be a good fit for jobs at 
  their company.Talent assessments help predict a new hire’s on-the-job performance and retainability.
  So, in theory, applicants who pass the screening test should perform better as employees if they're hired.
Talent assessment tests are based on hiring and retention case studies and analyzing employee data. 
The test results will give the company an indication of how close a match the candidate taking the test will be to the company's hiring specifications.</B></I></p>
 
</div>
<br>

<div class="container">
  <div class="row">
    <nav class="col-sm-3" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked"  data-offset-top="1000">
        <li><a href="#section1">Fiserv</a></li>
        <li><a href="#section2"> HCL Technologies </a></li>
        <li><a href="#section3">Kellton Tech Solutions Ltd.</a></li>
		<li><a href="#section4">Standard Chartered International</a></li>
		<li><a href="#section5">Jade Global</a></li>
		<li><a href="#section6">Wipro Technologies </a></li>
		<li><a href="#section7"> Unisys India Private Limited</a></li>
		<li><a href="#section8"> EXL Services Pvt. Ltd.</a></li>
		<li><a href="#section9">Orange Business Services</a></li>
		<li><a href="#section10">Bitwise Global</a></li>
	
		
       
      </ul>
    </nav>
    <div class="col-sm-9" >
      <div id="section1">    
        <h1 class="sp">Fiserv</h1><br>
        <p class="sp">
		<h4  class="sp"><U><I><B> Eligibility Criteria:</I></B></u><h4>
<h5 class="text">For B. E. Students: Minimum 65% and above in 10th, 12th and minimum 6.0 CGPA and above in B. E. Maximum of 2 years Education Gap allowed anytime between two courses.
For MCA Students: Minimum 65% and above in 10th, 12th, Graduation and minimum 6.0 CGPA and above in MCA. Maximum of 2 years Education Gap allowed anytime between two courses. </h5>
<h4  class="sp">Process:</h4>
<h5 class="text"> Passage Writing, Aptitude + Technical Online Test , Technical Interview Round1, Managerial Interview Round & Personal HR Discussion.</h5>
</p>
</div>


      <div id="section2"> 
	  
        <h1 class="sp">HCL Technologies</h1><br>
       <p class="sp">
		<h5 class="text">HCL roots in India go back to the year 1993 when it’s wholly owned subsidiary HCL Comnet was instituted to focus on the domestic communication and connectivity services market. 
		One of the early entrants in India market its first assignment was to partner with a leading Financial Institution to establish the world’s first floorless stock exchange. 
		Over the years, HCL Comnet diversified its portfolio to provide end-to-end enterprise IT infrastructure solutions and went on to pioneer the Offshore Remote Infrastructure 
		Management Industry in 2002-03. In year 2007, the company took over a larger role within the HCL Technologies group to front-end HCL Technologies’ complete portfolio in the 
		India market</h5>
		
		<h4 class="sp"><U><I><B> Eligibility Criteria:</I></B></u><h4>
		
             <h5 class="text">For Minimum 60% and above in 10th, 12th and B. E. / B. Tech. No active backlog. 
								Willing to relocate anywhere in India/Abroad. Willing to sign a service agreement of 18 months and probation of 15 months.
							Willing to work in 24*7 environment. 
		    </h5>
			<h4  class="sp">><U><I><B>Process:</I></B></u></h4>

			<h5 class="text"> Communication Assessment, PPT, Technical and HR Interview, Online Aptitude test.
			</h5>
		</p>
   </div>        
   
    <div id="section3" class="sp"> 
	  
        <h1 class="sp">Kellton Tech Solutions Ltd.</h1><br>
       <p class="sp">
		<h5 class="text">Kellton Tech is a public listed, CMMi Level 3 company that aims to be one of the fastest emerging IT services company in India. The company plans for an exponential growth both through an organic and inorganic means over the next two years. Company today has presence in US, EMEA and Asia. We have development centres in Gurgaon, Hyderabad and the US. We have at present major focus on Microsoft Technologies, Enterprise Consumer Mobile 
		Application Solutionsand Open Source Solutions. We are also into Internet of Things (IoT), ERP, Big Data and Cloud computing. For more details, 
		please log onto <a>www.kelltontech.com</a></h5>
		
		<h4><U><I><B> Eligibility Criteria:</I></B></u><h4>
		
             <h5 class="text">Minimum 60% and above from 10th onwards. No active backlog. 
		    </h5>
			<h4 class"text">><U><I><B>Process:</I></B></u></h4>

			<h5 class="text"> Communication Assessment, PPT, Technical and HR Interview, Online Aptitude test.
			</h5>
			<h4 class"text">><U><I><B>Desired Profile:</I></B></u></h4>

			 <h6 class="text">Basic knowledge of Object Oriented Programming (OOPS).<br>
 Basic knowledge of Software Development Life Cycle (SDLC).<br>
 Basic knowledge of Mobile / Web development.<br>
 Good logical, analytical and reasoning skills.<br>
 Good communication and presentation skills.<br>
 Hard working, team player and quick learner.</h6>
		</p>
   </div>        
   
   
   <div id="section4"  class="sp"> 
	  
        <h1 class="sp">Standard Chartered International</h1><br>
       <p class="sp">
		<h5 class="text">Scope International, is a wholly owned subsidiary of Standard Chartered Bank, UK Plc, which began its operations in Chennai in the year 2001.
		In just a decade’s time, Scope grew to over 9500 employees, servicing most of the 70 countries where the Standard Chartered Group has a footprint. Over the years, 
		Scope has moved ahead from being a cost-effective venture for the Group to becoming an integral part of its operations providing quality services to Standard Chartered
		Bank worldwide. It is housed in world-class facilities across its campuses in Chennai, Bangalore, Kuala Lumpur and Tianjin, all of which incorporate international health
		and safety standards.For more details visit to <a> www.sc.com</a></h5>
		
		<h4><U><I><B> Eligibility Criteria:</I></B></u><h4>
		
             <h5 class="text">70% and above throughout their academics (10th, 12th & all semesters). 
		    </h5>
			<h4 class"text">><U><I><B>Process:</I></B></u></h4>

			<h5 class="text"> Communication Assessment, PPT, Technical and HR Interview, Online Aptitude test.
			</h5>
		</p>
   </div>        
   
   <div id="section5" class="sp"> 
	  
        <h1 class="sp">Jade Global</h1><br>
       <p class="sp">
		<h5 class="text">Jade Global is a global information technology systems and solutions company committed to our customer’s long term business growth and success. We create value through a portfolio of IT services delivered by our team of highly experienced consultants. Clients rely on our trustworthy advice to derive value from software investments and gain business efficiencies by leveraging our ability and knowledge of best practices. Being right sized, gives us extraordinary flexibility and the ability to pass on cost benefits to our clients.
		For more details visit to <a>www.jadeglobal.com</a>.</h5>
		
		<h4><U><I><B> Eligibility Criteria:</I></B></u><h4>
		
             <h5 class="text">For Minimum 60% and above in 10th, 12th and B. E. / B. Tech. No active backlog. 
								Willing to relocate anywhere in India/Abroad. Willing to sign a service agreement of 18 months and probation of 15 months.
							Willing to work in 24*7 environment. 
		    </h5>
			<h4 class"text">><U><I><B>Process:</I></B></u></h4>

			<h5 class="text"> Communication Assessment, PPT, Technical and HR Interview, Online Aptitude test.
			</h5>
		</p>
   </div>        
   <div id="section6"  class="sp"> 
	  
        <h1 class="sp">Wipro Technologies .</h1><br>
       <p class="sp">
		<h5 class="text">Wipro Limited (NYSE: WIT, BSE: 507685, NSE: WIPRO) is a leading global information technology, consulting and business process services company. We harness the power of cognitive computing, hyper-automation, robotics, cloud, analytics and emerging technologies to help our clients adapt to the digital world and make them successful. A company recognized globally for its comprehensive portfolio of services, strong commitment to 
		sustainability and good corporate citizenship,</h5>
		
		<h4><U><I><B> Eligibility Criteria:</I></B></u><h4>
		
             <h5 class="text"> 10th Standard  -​Minimum ​60% ​and above ​( including all subjects)<br>
12th Standard        -  ​Min​imum 60% ​and above ​(Including all subjects)<br>
​​ Graduation​ (in case of MCA)​             - ​Minimum ​65% ​and above ​(Including all Subjects)<br>
​ ​B. Tech / B. E. / MCA​             - ​Minimum ​6​.5 and above CGPA​ (​simple average of all semester)<br>
 No pending backlogs/arrears at the time of the interview<br>
		    </h5>
			<h4 class"text">><U><I><B>Process:</I></B></u></h4>

			<h5 class="text"> Communication Assessment, PPT, Technical and HR Interview, Online Aptitude test.
			
			</h5>
			
		</p>
   </div>        
   
   <div id="section7" class="sp"> 
	  
        <h1 class="sp">Unisys India Private Limited</h1><br>
       <p class="sp">
		<h5 class="text">Unisys is a worldwide information technology company. We provide a portfolio of IT services, software, and technology that solves critical problems for clients. We specialize in helping clients secure their operations, increase the efficiency and utilization of their data centers, enhance support to their end users and constituents, and modernize their enterprise applications. To provide these services and solutions, we bring together offerings and capabilities in outsourcing services, systems integration and consulting services, infrastructure services, maintenance services, and high-end server technology. With approximately 23,000 employees, Unisys serves commercial organizations and 
		government agencies throughout the world. For more details, please visit: <a>www.unisys.com</a></h5>
		
		<h4><U><I><B> Eligibility Criteria:</I></B></u><h4>
		
             <h5 class="text">For Minimum 60% and above in 10th, 12th and B. E. / B. Tech. No active backlog. 
								
							 
		    </h5>
			<h4 class"text">><U><I><B>Process:</I></B></u></h4>

			<h5 class="text"> Online Technical and communication Tests, PPT, result announcement, English and Algorithmic test for shortlisted students 
			</h5>
		</p>
   </div>        
   
   
   <div id="section8" class="sp"> 
	  
        <h1 class="sp"> EXL Services Pvt. Ltd</h1><br>
       <p class="sp">
		<h5 class="text">Serving organizations in insurance, healthcare, banking and financial services, utilities, travel, transportation and logistics, we deliver solutions from wherever clients need them. EXL also provides functional services, such as finance and accounting, legal support, and analytics to even more industries, including professional services, retail, manufacturing and energy. Headquartered in New York, EXL has more than 24,000 professionals in locations throughout the United States, Europe, Asia, Latin America, and South Africa.
Ours is a company built on value and trust</h5>
		
		<h4><U><I><B> Eligibility Criteria:</I></B></u><h4>
		
             <h5 class="text">For Minimum 60% and above in 10th, 12th and B. E. / B. Tech. No active backlog. 
								
		    </h5>
			<h4 class"text">><U><I><B>Process:</I></B></u></h4>

			<h5 class="text"> Communication Assessment, PPT, Technical and HR Interview, Online Aptitude test.
			</h5>
		</p>
   </div>        
   
   
   <div id="section9" class="sp"> 
	  
        <h1 class="sp">Orange Business Services.</h1><br>
       <p class="sp">
		<h5 class="text">Orange Business Services is a global IT and communications services provider, with services in 220 countries. We help companies collaborate more effectively, operate more efficiently and engage better with their customers, connecting their people, sites and machines securely and reliably.
		For more details, visit <a>http://www.orange-business.com</a></h5>
		
		<h4><U><I><B> Eligibility Criteria:</I></B></u><h4>
		
             <h5 class="text">For Minimum 70% and above in 10th, 12th and B. E. / B. Tech. No active backlog. 
								
		    </h5>
			<h4 class"text">><U><I><B>Process:</I></B></u></h4>

			<h5 class="text"> Communication Assessment, PPT, Technical and HR Interview, Online Aptitude test.
			</h5>
		</p>
   </div>        
   
   
   <div id="section10" class="sp"> 
	  
        <h1 class="sp">​Bitwise Global</h1><br>
       <p class="sp">
		<h5 class="text">Bitwise delivers technology solutions that leverage data to enable business insights. By deploying our breakthrough technology innovations we help our global clients maximize their competitive advantage. We are the industry's most experienced and dedicated team of data professionals, focusing on data warehousing, business intelligence, big data and web and mobile application development. We optimize value for our clients through our global delivery model and with our with proprietary technology tools that reduce the time, complexity and cost of data initiatives. Together, our people and technology provide 
		the insights clients need to continue to lead their fields. BitWise is headquartered in Chicago with offices in Pune, India and Sydney, Australia.</h5>
		
		<h4><U><I><B> >Eligibility Criteria:</I></B></u><h4>
		
             <h5 class="text">For Minimum 60% and above in 10th, 12th and B. E. / B. Tech. No active backlog. 
								 
		    </h5>
			<h4 class"text">><U><I><B>Process:</I></B></u></h4>

			<h5 class="text"> Communication Assessment, PPT, Technical and HR Interview, Online Aptitude test.
			</h5>
		</p>
   </div>        
   
   
   
     
    </div>
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
