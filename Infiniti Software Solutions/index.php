<?php
include("db.php");
?>


<!Doctype html>
<html>
	<head>
		<title> Admin </title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
				<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
				<link rel="stylesheet" type="text/css" href="style.css">
				<script src="admin/jquery.min.js"></script>
	</head>
	<body>

	<div class="row">
		<div class=col-md-3> 
					<div  class=heading>
						<h3 style=" text-align:center; font-weight:bold; color:white; line-height:60px">	Admin Panel </h3>
		
					</div>
					<div class="pro"><br><br>
							<center><img src="img/ad.png" width="250px" height="200px" class="img-circle"></center>
					</div>
					<div class="menu">
					<ul>
							<li class=" active"> <a href="index.php "> <i class=" glyphicon glyphicon-dashboard "style="font-size:25px;margin-left:7px">&nbsp;</i>  DashBoard</a></li>
							<li> <a href="view.php"> <i class="glyphicon glyphicon-edit "style="font-size:25px;margin-left:7px">&nbsp;</i>  Add and Edit</a></li>
							<li> <a href="viewcat.php"> <i class="glyphicon glyphicon-duplicate "style="font-size:25px;margin-left:7px">&nbsp;</i>  Categories</a></li>
							<li> <a href="profile.php"> <i class="glyphicon glyphicon-folder-open "style="font-size:25px;margin-left:7px">&nbsp;</i>   Profile</a></li>
							
							</ul>
					
					</div>
				
		</div>
		<div class=col-md-9 style="background:#888;" >
			<div class="container-fluid">
				<form>
					<button Class="btn btn-blue" style="float:right ; margin:20px" >Log out</button>
				</form> 
				
			</div>
			<div  class="container-fluid" style="background:white; border:1px solid;
			position :absolute;width:700px;">
			<h3> Admin DashBoard</h3>
			<h6 style="font-weight:bold">Welcome</h6>
			<hr>
					<div class="row">
						<div class="col-md-4">
							<div class="cc">
							<center>
							<div class="icon">
								<i class="	glyphicon glyphicon-th-list "style="font-size:60px;color:white"> </i><br>
							</div>
							<br>
							<?php
								$pc ="select * from news";
								$run_p=mysqli_query($con,$pc);
								$count_pc=mysqli_num_rows($run_p);
								 
							
							?>
							
							<br>
							<h3> Totel Post </h3>
							<span class="badge " style= "font-size:20px"> <?php echo "$count_pc";?> </span>
							</center>
							</div>
						</div>
						<div class="col-md-4">
						<div class="cc">
							<center>
							<div class="icon">
								<i class="		glyphicon glyphicon-pencil "style="font-size:60px;color:white"> </i><br>
							</div>
							<br>
							<?php
								$pc2 ="select * from cat";
								$run_p2=mysqli_query($con,$pc2);
								$count_pc2=mysqli_num_rows($run_p2);
								 
							
							?>
							<br>
							<h3> Categories </h3>
							<span class="badge " style= "font-size:20px"><?php echo "$count_pc2";?> </span>
							</center>
							</div>
						</div>
						
						
						<div class="col-md-4">
						<div class="cc">
							<center>
							<div class="icon">
								<i class="	glyphicon glyphicon-phone "style="font-size:60px;color:white"> </i><br>
							</div>
							<br>
							<?php
								$pc1 ="select * from contect";
								$run_p1=mysqli_query($con,$pc1);
								$count_pc1=mysqli_num_rows($run_p1);
								 
							
							?>
							<br>
							<h3> Contect </h3>
							<span class="badge " style= "font-size:20px"> <?php echo "$count_pc1";?> </span>
							</center>
							</div>
						
						</div>
				
					</div>
					<br>
					<br>
					<h3> Contect Us </h3>
					<hr>
					<table class="table Table-hover table-striped table-bordered">
						<tr>
									<th> S.No</th>
									<th> Name</th>
									<th> Email</th>
									<th> Message</th>
									<th>Date</th>
							</tr>
							<?php
							$pc3 ="select * from contect";
							$run_p3=mysqli_query($con,$pc3);
							while
							($row=mysqli_fetch_array($run_p3))
							{
								$name=$row['name'];
								$email=$row['email'];
								$msg=$row['msg'];
								$date=$row['date'];
																
							
							?>
							<tr>
									<th> 1</th>
									<th><?php echo "$name";?> </th>
									
									<th> <?php echo "$email";?></th>
									<th><?php echo "$msg";?></th>
									<th><?php echo "$date";?></th>
									
							</tr>
							<?php
							}
							?>
					</table>		
							
		</div>
			
		</div>
	
	</div>

	</body>
</html> 