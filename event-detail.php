<?php include"header.php"; ?>
  <!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
  <?php
               $id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM events where id= :post_id");
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
            <li><a href="events.php">Events</a></li>
            <li class="active"><?php echo $row['title']; ?></li>
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
        <div class="col-md-10 col-sm-10 col-xs-8">
          <h1>Events</h1>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4"> <a href="events.php" class="pull-right btn btn-primary">All events</a> </div>
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
              <nav class="btn-toolbar pull-right"> <a href="#" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Print" ><i class="fa fa-print"></i></a> <a href="#" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Contact us" ><i class="fa fa-envelope"></i></a> <a href="#" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Share event" ><i class="fa fa-location-arrow"></i></a> </nav>
              <h2 class="post-title"><?php echo $row['title']; ?></h2>
            </header>
            <article class="post-content">
              <div class="event-description"> 
                <div class="spacer-20"></div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">Event details</h3>
                      </div>
                      <div class="panel-body">
                        <ul class="info-table">
                          <li><i class="fa fa-calendar"></i> <strong><?php echo $row['date']; ?></strong></li>
                          <li><i class="fa fa-clock-o"></i> <?php echo $row['time']; ?></li>
                          <li><i class="fa fa-map-marker"></i> <?php echo $row['venue']; ?></li>
                          <li><i class="fa fa-phone"></i> <?php echo $row['phone']; ?></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <?php echo $row['detail']; ?>
				 <div class="post-meta"> 
				<h5>Share this Event:</h5>                                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_sharing_toolbox"></div>
			  </div>
				</div>
				  <div class="fb-comments" data-href="read.php?id=<?php echo $row['id'];?>/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
           </article>
          </div>
		  <?php } ?>
          <!-- Start Sidebar -->
         <?php include"side-bar.php"; ?>
  <!-- Start Footer -->
  <?php include"footer.php"; ?>