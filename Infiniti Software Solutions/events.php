<?php
include("db.php");
 @$get=$_GET['Id'];

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
							<li class="navbar " ><a href="contect.php" ><i class="glyphicon glyphicon-phone-alt glyphicon-info"></i> About Us</a>
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
								<li class="active"><a href="blog.php">Trending On</a></li>
							  <li><a href="events.php">All Events</a></li>
							  <li><a href="search.php">Search Events</a></li>
						</ul>
				</div>
			</nav>
		<div class="row">
			<div class="col-md-8" >
					<div class="side">
						<div class="post_main">
							<span> All Events</span>
							<br>
							<br>
						</div>
					</div>
					<div class="post">
					<?php 
						if($get)
						{
							$select="select * from news where cat='$get'";
						}
						else
						{
					$select="select * from news order by id Desc";
						}
					$select_run=mysqli_query($con,$select);
					$count=mysqli_num_rows($select_run);  
					if($count>0)
					{
						while($row=mysqli_fetch_array($select_run))
						{
						$id=$row['Id'];
						$name=$row['Name'];
						$text=$row['Text'];
						$img=$row['Image'];
						$date=$row['Date'];
						$author=$row['Author'];
						
					  
					?>
						<div class="row">
							<div class="col-md-5" style="border:0px solid margin-left:20px">
									<img src="img/<?php echo $img ?> " class="img img-thumbnail"
										width="300px" height="200px">
							</div>
							<div class="col-md-7">
								<h4 style="font-weight:bold;color:black"><?php echo $name ?><?php echo $date ?></h4>
								<h5 ><?php echo $text ?></h5>
							</div>
							<a  href="viewpost.php?id=<?php echo $id ?>" class ="btn btn-blue" style="float:right;">Read more</a>
						</div>
					<?php  }}
				else
				{
					echo "<h3> <center> Sorry No Post Available</center>
					</h3>";
				}
						?>
					
						
			
					</div>
				
			</div>
				<?php include("side.php") ;
			?>
		
	</div>		
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