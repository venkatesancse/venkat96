<?phpinclude("db.php");
?>
<!doctype html>
	<html>
	<head>
			<title>Infiniti Blog </title>
				<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
				<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
				<link rel="stylesheet" type="text/css" href="blog.css">
				<script src="jquery.min.js"></script>
	</head>
		<body class="main">
		<div class="container-fluid">
		<div class="jumbotron">
			<div class="text-right"> 
					<a href="https://www.facebook.com/Infiniti.Atyourprice?ref=hl" target="_blank" rel="noopener"><img  src="img/fb1.png" width="30px" alt="Facebook" title="facebook"></a>
					<a href="https://twitter.com/Infiniti_Soft" target="_blank" rel="noopener"><img src="img/tw.png" width="30px" alt="Twitter" title="Twitter"></a>
					<a href="https://www.linkedin.com/company/761319?trk=tyah&trkInfo=clickedVertical%3Acompany%2Cidx%3A2-1-2%2CtarId%3A1431329332776%2Ctas%3Ainfiniti%20software" target="_blank" rel="noopener"><img src="img/in.png" width="30px" alt="LinkedIn" title="LinkedIn"></a>
					<a href="https://twitter.com/Infiniti_Soft" target="_blank" rel="noopener"><img src="img/yt.png" width="30px" alt="You tube" title="You Tube"></a>
			</div>
		<nav class="navbar navbar-expand-lg navbar-fixed-top">
			
				<div class="navbar-header ">
					<button type ="hover" class="navbar-toggle " data-toggle="collapse" data-target="#mynavbar"></button>
					<a class="navbar-brand" href="#"><img width="40px" class=" img-rounded margin:3px" src="img/infiitilogo.png"><b class="margin-left:40px color:black">I N F I N I T I</b><h2>SOFTWARE SOLUTIONS</h2></a>
				</div>
					<div id="mynavbar " class="collapse navbar-collapse">
						<ul class=" nav navbar-nav navbar-right">
							<li class="navbar "><a href="main.php" ><i class="glyphicon glyphicon-home glyphicon-info"></i> Home</a>
							<li class="navbar "><a href="blog.php"><i class="glyphicon glyphicon-blackboard glyphicon-info"></i> Infiniti Blog</a>
							<li class="navbar "><a  href="login.php"><i class="glyphicon glyphicon-stats glyphicon-info"></i> Admin Panel </a>
							<li class="navbar " ><a href="user.php"><i class="glyphicon glyphicon-phone-alt glyphicon-info"></i> Contect Us</a>
							<li class="navbar  active" ><a href="contect.php" ><i class="glyphicon glyphicon-phone-alt glyphicon-info"></i> About Us</a>
						</ul>
					</div>
			
		</nav>	
			
		</div>
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
						<div class="navbar-header">
							<a class="navbar-brand" href="#">O U R COMPANY MEMORIES</a>
						</div>
						<ul class="nav navbar-nav">
								<li ><a href="blog.php">Trending On</a></li>
							  <li><a href="events.php">All Events</a></li>
							  <li><a href="search.php">Search Events</a></li>
						</ul>
				</div>
			</nav>
		<div class="row">
			<div class="col-md-8" >
			
								<div class="side">
					<div class="post_main">
						<span > Comment</span>
					</div>
				</div>
				<br>
					<form action ="user.php" method="post">
					<label for="name" >Write your Name</label><br>
						<input id="name" style="width:500px" type="text" name="name" required  class="form_control"><br>
						<label for="phno" >Enter your Contact</label><br>
						<input id="phno" type="text" style="width:500px" name="phno" required  class="form_control"><br>
						<label for="email" >Enter Your email Id</label><br>
						<input id="email" name="email" type="email" style="width:500px" name="name" required  class="form_control"><br>
						<label for="msg" >Write Your Valuable Quotes</label><br>
						<textarea name="msg" class="form-control" id=msg></textarea><br>
						<button class=" btn btn-blue btn-lg" name="submit" style="float:right " >Send </button>
						<a href="userlogin.php" >Already Regisetered...Log In Now </a>
					</form>
			<?php
				if(isset($_POST['submit']))
				{
					
					 $name=$_POST['name'];
					  $email=$_POST['email'];
					 $msg=$_POST['msg'];
					$insert="insert into contect (name,email,msg) values ('$name','$email','$msg')";
					$run_in=mysqli_query($con,$insert);
					if($run_in)
					{
						echo"<script>alert('yout Quotes are Inserted')</script>";
					}
					else
					{
						echo"<script>alert('Fill Corectly')</script>";
					}
				}
			?>
			
			
			</div> 
			<?php include("side.php") ;
			?>			
	<div class="row">
		<div class=col-md-2>
			<marquee derection="right"><img src="img/AYP.png" width="100px"></marquee>
			</div>
			<div class=col-md-2>
			<marquee derection="right"><img src="img/Agency-Auto-Icon.png" width="100px"></marquee>
			</div>
			<div class=col-md-2>
			<br>
			<marquee derection="right"><img src="img/Craft.png" width="100px"></marquee>
			</div>
			<div class=col-md-2>
			<br>
			<br>
			<marquee derection="left"><img src="img/GroupRm.png" width="100px"></marquee>
			</div>
			<div class=col-md-2>
			<br>
			<br>
			<marquee derection="left"><img src="img/expen.jpg" width="100px"></marquee>
			</div>
			<div class=col-md-2>
			<br>
			<marquee derection="left"><img src="img/SME.png" width="100px"></marquee>
			</div>
			</div>
<footer>

<div class="jumbotron jumbotron-foot text-center color:primary">
	<div><marquee id="lef" class="text-success font-size:22px color:#25d0d2" behavior="scroll" direction="left">BUSINESS TRAVEL MANAGEMENT SOLUTION <b>|&nbsp;&nbsp;</b> EXPENSE MANAGEMENT SOLUTION <b>|&nbsp;&nbsp;</b>GROUP REVENUE MANAGEMENT<b>|&nbsp;&nbsp;</b>AIRLINE FORECASTING TOOL<b>|&nbsp;&nbsp;</b>AIRLINE SME SOLUTION</marquee></div>
	<marquee direction="up">
	<div class="row">
	<div class="col-md-5">
	<div id="mynavbar " class="collapse navbar-collapse text-right ">
	
	
	
	
						<ul class=" nav navbar-nav navbar-center">
							<li class="navbar "><a href="main.php" ><i class="glyphicon glyphicon-home glyphicon-info"></i></a>
							<li class="navbar "><a href="blog.php"><i class="glyphicon glyphicon-blackboard glyphicon-info"></i> </a>
							<li class="navbar "><a  href="admin.php"><i class="glyphicon glyphicon-stats glyphicon-info"></i> </a>
							<li class="navbar " ><a href="about.php"><i class="glyphicon glyphicon-user glyphicon-info"></i></a>
							<li class="navbar " ><a href="contect.php" ><i class="glyphicon glyphicon-phone-alt glyphicon-info"></i></a>
						</ul>
					</div>
  <p class="left-align:10px">Posted by: Infiniti Softnet.venkat</p>
  <p class="left-align:10px">Contact information: <a href="svtvenkatsmart@gmail.com">
  svtvenkatesancse@gmail.in</a>.</p>
  </div>
  
  <div class="col-md-2 text-center"> 
					<a href="https://www.facebook.com/Infiniti.Atyourprice?ref=hl" target="_blank" rel="noopener"><img  src="img/fb1.png" width="30px" alt="Facebook" title="facebook"></a>
					<a href="https://twitter.com/Infiniti_Soft" target="_blank" rel="noopener"><img src="img/tw.png" width="30px" alt="Twitter" title="Twitter"></a>
					<a href="https://www.linkedin.com/company/761319?trk=tyah&trkInfo=clickedVertical%3Acompany%2Cidx%3A2-1-2%2CtarId%3A1431329332776%2Ctas%3Ainfiniti%20software" target="_blank" rel="noopener"><img src="img/in.png" width="30px" alt="LinkedIn" title="LinkedIn"></a>
					<a href="https://twitter.com/Infiniti_Soft" target="_blank" rel="noopener"><img src="img/yt.png" width="30px" alt="You tube" title="You Tube"></a>
	</div>
	<div class="col-md-5">
	</div>
			</marquee>
  <div>
</footer>
	
</div> 
</body>
</html>