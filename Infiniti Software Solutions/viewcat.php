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
			<h3> View categories</h3>
			
			<?php
			$select ="select *from cat order by id Desc ";
			$run=mysqli_query($con,$select);
			$count=mysqli_num_rows($run)
			?>
			
			<h6 style="font-weight:bold">Total categories <span><?php echo "$count"; ?></span></h6>
			<hr>
					<a href="insertcat.php" class="btn btn-info" style="float:right">
					Insert catagories</a>
					<table class="table Table-hover table-striped table-bordered">
						<tr>
									<th> S.No</th>
									<th> name</th>
									<th> Action</th>
							</tr>
							<?php
							while($row=mysqli_fetch_array($run))
							{
								$name=$row['name'];
									$id=$row['Id'];
								
							?>
							<tr>
									<th> 1</th>
									<th><?php echo "$name"; ?></th>
									
									<th><a href=delcat.php?id=<?php echo  "$id"; ?> class="btn btn-danger"> Delete</button></th>
							
							
							</tr>
							<?php }?>
							  
		</div>
			
		</div>
	
	</div>

	</body>
</html> 