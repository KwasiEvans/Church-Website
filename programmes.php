<?php include "header.php"; ?>
  <!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(images/slide2.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Programmes</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Backed Header --> 
  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Our Programmes</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
   <?php
                           
				$result = $db->prepare("SELECT * FROM tbl_resources");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
               ?>  
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
		<?php echo $row['body']; ?>
          </div>
      </div>
    </div>
  </div>
  <?php } ?>
  <!-- Start Footer -->
  <?php include "footer.php"; ?>