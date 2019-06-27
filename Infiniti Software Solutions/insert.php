<?php
include("db.php");
?>
<!doctype html>
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
			<h3> View Message</h3>
			<h6 style="font-weight:bold">Insert Posts</h6>
			<hr>
			<form action="insert.php" method="post">
				<label for=name>Name</label>
				<input type="text" name ="name" id =name class="form-control"required>
				<br>
				<label for=img>Choose file</label>
				<input type="file" name ="img" id =img class="form-control" required> 
				<br>
				<label for=cat >select Categories</label>
				<select name=select id=cat required class="form-control">
					<?php
					$select ="select *from cat order by id DESC";
					$run=mysqli_query($con,$select);
					while ($row =mysqli_fetch_array($run))
					{
						$id=$row['Id'];
						$name=$row['name'];
						
					?>
					<option value=<?php echo "$id";?>"><?php echo "$name"; ?> </option>
					<?php }?>
				</select>
				<br>
				<label for=msg>Message</label>
				<textarea  id =text  required class="form-control" name="text" style="heigh: 100px" ></textarea><br>
				<br>
				<label for=auther>Author</label>
				<br>
				<input type="text" name=author required id ="author" class="from-control ">
				<br>
				<br>
				<button class="btn btn-success"style="float:right" name="submit" > Submit</button>
				
				</form>
				<?php
				if(isset($_POST['submit']))
				{
					$name=$_POST['name'];
					$img=$_POST['img'];
					$select=$_POST['select'];
					$text=$_POST['text'];
					$author=$_POST['author'];
					$insert ="insert into news (Name,Image,Cat,Text,Author) values ('$name','$img','$select','$text','$author')";
				$run =mysqli_query($con,$insert);
				if($run)
					{
					echo "<script> alert ('your post Inserted')</script>";
					}
					else
					{
					echo "<script> alert ('check your details')</script>";
					}
				}
				?>
								  
		</div>
			
		</div>
	
	</div>

	</body>
</html> 
