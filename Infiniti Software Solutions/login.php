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
			<center>
<h1 style ="font_waight:bold"><span style="color:#d083cf">  ADMIN LOG IN PANEL</span></h1>
			
			<br>
			<BR>
			<form action="" method="POST">
			<input type ="text" name ="user" class="form-control" id= a style="width:500px;box-shadow:black" placeholder ="Enter User Name">
			<br>
			<input type ="password" name ="pass" class="form-control" id=b style="width:500px" placeholder ="Enter Password">
			<br><button name=sub class="btn btn-blue"> LOGIN</button>
			</form>
			<?php
					if(isset($_POST['sub']))
					{
						$user=$_POST['user'];
						
						$pass=$_POST['pass'];
						
						
						
						$in ="select * from admin where user='$user' AND pass='$pass'";
						$run=mysqli_query($con,$in);
						
						if($run)
							
						{
							echo "<script>window.open('index.php','_self')</script>";
							
						}
						else
						{
							echo "<h5> User name or password is wrong</h5>";
						}
						
					}
			?>
			</center>
			
	</body>
	</html> 