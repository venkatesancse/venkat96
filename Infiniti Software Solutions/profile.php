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
							<li> <a href="index.php" class=" active"> <i class=" glyphicon glyphicon-dashboard "style="font-size:25px;margin-left:7px">&nbsp;</i>  DashBoard</a></li>
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
			
			<h2 style="font-weight:bold">Change Password</h2>
			<hr>
			<form action="profile.php" method="post">
				<label for=name3>Write Your Old Password</label>
				<input type="password" name ="name3" id =name3 class="form-control"required>
				<br>
				<label for=name1>Write Your new Password</label>
				<input type="password" name ="name1" id =name1 class="form-control"required>
				<br>
				<label for=name2>Write Your New Password</label>
				<input type="password" name ="name2" id =name2 class="form-control"required>
				<br>
				
				<br>
				<button name=submit class="btn btn-success"style="float:right"> Update</button>
				
				</form>
								  <?php
								  if(isset($_POST['submit']))
								  {
									  $old=$_POST['name3'];
									  $new=$_POST['name1'];
									  $again=$_POST['name2'];
									  $select ="select* from admin";
									  $rim=mysqli_query($con,$select);
									  while($row=mysqli_fetch_array($rim))
									  {
										  $user=$row['user'];
										    $pass=$row['pass'];
										  
									  }
									  if($pass==$old)
									  {
											if($new==$again)
											{
												$update="update admin set pass='$again'";
												$ruu=mysqli_query($con,$update);
												if($ruu)
												{
														echo "<center><h6>  Your Password is updated</h6></center>";
												}
												else{
														echo "<center><h6> Your Password not Update</h6></center>";
												}
											}
											else
											{
												echo "<center><h6> Not match Your Password</h6></center>";
											}
									  }
								  }
								
									  else
									  {
										  echo "<center><h6> old password is wrong</h6></center>";
									  }
								  
								    
								  ?>
								  
		</div>
			
		</div>
	
	</div>

	</body>
</html> 