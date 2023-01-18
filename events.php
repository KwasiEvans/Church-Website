<?php include "header.php"; ?>
  <!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(images/slide1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Events</li>
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
          <h1>Events</h1>
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
            <!-- Events Listing -->
            <div class="listing events-listing">
              <header class="listing-header">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <h3>All events</h3>
                  </div>
                  
                </div>
              </header>
              <section class="listing-cont">
                <ul>
				<?php                     
                            if(!isset($_GET["page"])){
                                $_GET["page"] = 1;
                            }
                                
                                $tbl_name="events";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
       
      
         //$query = "SELECT COUNT(*) as num FROM $tbl_name";
	//$total_pages = mysqli_fetch_array(mysqli_query($conn,$query));
	//$total_pages = $total_pages['num'];
	
        // $query = "SELECT COUNT(*) as num FROM $tbl_name";
         $get_events = ORM::for_table("$tbl_name")
                 ->find_array();
         
	$total_pages = count($get_events);
	
	
	/* Setup vars for query. */
	$targetpage = "pagination.php"; 	//your file name  (the name of this file)
	$limit = 5; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	
				//$news = $db->prepare("SELECT * FROM posts_tbl  ORDER BY id ASC LIMIT $start, $limit");
				//$news->execute();
                                
                             
                            
				
	                          $news = ORM::for_table("events")
                                          ->limit($limit)
                                          ->offset($start)
                                          ->order_by_desc('events.id')
                                           ->find_array();
                                       
                                  ?>
                                  <?php foreach ($news as $row):?>

                                
                  <?php               
                                /* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	 ?>
				<li class="item event-item">
                    <div class="event-detail">
                      <h4><a href="event-detail.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></h4>
                      <span class="event-dayntime meta-data"><?php echo $row['date'];?> | <?php echo $row['time'];?></span>
                       <?php echo strip_tags(substr($row['detail'],0,50)) ;?>...
					  </div>
                    </li>
					<?php endforeach;?>	 
                                                    
							<?php ?>
                 
                </ul>
				<span class="text-muted m-r-sm">
                                                             
                                                             Showing
                                 <?php if($lastpage == $next-1):?>
                                    <?=$total_pages?>
                                <?php else:?>
                                <?=$page * $limit?> 
                            <?php endif;?>
                                                             of <?=$total_pages?>
                                
                                        </span>
                                                    <div class="btn-group">
                             
                                <?php if($page != 1):?>
                                <a class="btn btn-default" href="?page=<?=$prev?>"><i class="">Page <?=$prev?><<</i></a>
                                <?php endif;?>
                                
                                <?php if($lastpage == $next-1):?>
                                
                                <?php else:?>
                                <a class="btn btn-default" href="?page=<?=$next?>"><i class="">>>Page <?=$next?></i></a>
                                <?php endif;?>
                            </div>	
              </section>
            </div>
          </div>
          <!-- Start Sidebar -->
		  <?php include"side-bar.php"; ?>
  <!-- Start Footer -->
<?php include "footer.php"; ?>