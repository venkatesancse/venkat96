<?php
include("db.php");
$get=$_GET['id'];
$del="delete from cat where id ='$get'";
$run=mysqli_query($con,$del);
if($run)
{
	echo "<script>window.open('viewcat.php?msg=Delete Successfull','_self')</script>";
}
else
{
	echo "<script>window.open('viewcat.php?msg=No Rows Selected','_self')</script>";
}
?>