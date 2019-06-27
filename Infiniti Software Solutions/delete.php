<?php
include("db.php");
$get=$_GET['id'];
$del="delete from news where id ='$get'";
$run=mysqli_query($con,$del);
if($run)
{
	echo "<script>window.open('view.php?msg=Delete Successfull','_self')</script>";
}
else
{
	echo "<script>window.open('view.php?msg=No Rows Selected','_self')</script>";
}
?>