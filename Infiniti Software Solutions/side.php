<?php
include("db.php");
?>
<div class="col-md-4">
						<div class="side">
							<div class="side_main " >
								<span>Trending Post<span>
							</div>
						</div>
				
				<div class="post">
							<div class="row">
							<?php
								$select="select * from news order by id desc limit 0,4";
								$run=mysqli_query($con,$select);
								$count=mysqli_num_rows($run);
								if($count>0)
								{
									while($row=mysqli_fetch_array($run))
										
									{
										$id=$row['Id'];
										$name=$row['Name'];
										$text=$row['Text'];
										$img=$row['Image'];
										$date=$row['Date'];
										$author=$row['Author'];
									
								?>
									<div class="col-md-5" style="border:0px solid margin-left:20px">
										<img src="img/<?php echo $img ?>" class="img img-thumbnail"
											width="300px" height="200px" style="margin:10px"><br>
										
									</div>
									<div class="col-md-7">
											<h4 style="font-weight:bold;color:black"><a href=viewpost.php?id=<?php echo $id; ?>  ><?php echo $name ?></a></h4>
											<h5 ><?php echo $text ?></h5>
											
											<br>
									</div>
								
							</div>
							<?php }}
								else
								{
									echo "<h5><center> Sorry No Post Available<center></h5>";
								}
								?>
				</div>
				
			
							<div class="col-md-4">
								<div class="side">
									<div class="side_main " >
										<span>Categories<span>
									</div>
								</div>
								
							<div class="travel">
											<?php
											$cat="select * from cat order by id desc";
											$run_cat=mysqli_query($con,$cat);
											$count_cat=mysqli_num_rows($run_cat);
											if($count_cat>0)
											{
												while($row_cat=mysqli_fetch_array($run_cat))
												{
													$id_cat=$row_cat['Id'];
													$name_cat=$row_cat['name'];
													
												
												?>
												
											
									<a href="event.php?id=<?php echo $id_cat?>" ><?php echo $name_cat ?></a>
											<?php }}
											else
											{
												echo "<center><h6>Sorry No Categories Available </h6> </center>";
											}
												?>
											
									
							</div>
						</div>
						
		</div>					