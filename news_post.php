<?php include "header.php"; ?>
  <!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
   <?php
               $id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM news where id= :post_id");
	$result->bindParam(':post_id', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){                        
?>
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="news-update.php">News Update</a></li>
            <li class="active"><?php echo $row['news_title']; ?></li>
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
        <div class="col-md-8 col-sm-8">
          <h1>News</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <header class="single-post-header clearfix">
              <h2 class="post-title"><?php echo $row['news_title']; ?></h2>
            </header>
            <article class="post-content"> <span class="post-meta meta-data"><span><i class="fa fa-calendar"></i> Posted on <?php echo $row['date']; ?></span> <span></i> </span></span>
              <div class="featured-image"> <img src="uploads/<?php echo $row['file'];?>" alt=""> </div>
<div><?php echo $row['news_detail']; ?></div>
              <div class="post-meta"> 
			   <h5>Share this post:</h5>                                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_sharing_toolbox"></div>
			  </div>
			   <div class="fb-comments" data-href="read.php?id=<?php echo $row['id'];?>/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
            </article>
            </div>
		  <?php } ?>
          <!-- Start Sidebar -->
          <?php include"side-bar.php"; ?>
  <!-- Start Footer -->
  <?php include "footer.php"; ?>