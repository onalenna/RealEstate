<?php
  // Include the database configuration file
  include 'config.php';
  // Get images from the database
 // echo "string";
  $query = ("SELECT * FROM project ORDER BY id DESC limit 2 ");
  $res=mysqli_query($con,$query);

      while($row = mysqli_fetch_array($res)){
          $imageURL = '../CRM/CRM/img/'.$row["img"];
         
  ?>
  		
  		
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(<?= $imageURL; ?>);">
								<div class="desc">
									<div class="con">
										<h3><a href="projects.php"><?php echo "Project Name : ". $row['ProjectTitle']?></a></h3>
										<span><small><?php echo "Project Location : ". $row['location'];?> </small><br> 
											<small><?php echo "Project size : ". $row['size'];?> </small>
										</span>
										<span><small><?php echo "Cost : BWP  ". $row['price'];?> </small></span>
										<span><small><?php echo "Project description : ". $row['description'];?> </small></span>
										

										<p class="icon" style="color:white"> 
											<?php echo "Interested? talk to: ". $row['leadAgent'];?>

										</p>
									</div>
								</div>
							</div>
						</div>
						
      
  
<?php 
}


?>