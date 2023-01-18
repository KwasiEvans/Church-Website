<?php include"header.php"; ?>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">All Photos</h3>
					 <div class="xs tabls">
					 <div class="panel-body1">
					 <?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully deleted a photo!")?>
                                            </div>
                                            <?php endif;?>
					   <table class="table">
					    <thead>
							<tr>
							  <th>#</th>
							  <th>Caption</th>
							  <th>Photo</th>
							</tr>
						  </thead>
						  <tbody>
						   <?php                     //include('../connect.php');
                            if(!isset($_GET["page"])){
                                $_GET["page"] = 1;
                            }
                                
                                $tbl_name="gallery";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
                            /*$query = "SELECT COUNT(*) as num FROM $tbl_name";
	$total_pages = mysqli_fetch_array(mysqli_query($conn,$query));
	$total_pages = $total_pages['num'];
	*/
        $get_gallery = ORM::for_table("$tbl_name")
                 ->find_array();
         
	$total_pages = count($get_gallery);
	/* Setup vars for query. */
	$targetpage = "pagination.php"; 	//your file name  (the name of this file)
	$limit = 10; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	
				$result = $db->prepare("SELECT * FROM gallery  ORDER BY id DESC LIMIT $start, $limit");
				$result->execute();
                                
                                /* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	 ?>
			              
                            <span class="text-muted m-r-sm">Showing
                                 <?php if($lastpage == $next-1):?>
                                    <?=$total_pages?>
                                <?php else:?>
                                <?=$page * $limit?> 
                            <?php endif;?>
                                of <?=$total_pages?>
                                        </span>
                            
                            <div class="btn-group">
                                <?php if($page != 1):?>
                                <a class="btn btn-default" href="?page=<?=$prev?>"><i class="fa fa-angle-left"></i></a>
                                <?php endif;?>
                                
                                <?php if($lastpage == $next-1):?>
                                
                                <?php else:?>
                                <a class="btn btn-default" href="?page=<?=$next?>"><i class="fa fa-angle-right"></i></a>
                                <?php endif;?>
                            </div>
                        
			        
			    </div>
               </div>
                <table class="table">
                      <?php
        
				for($i=1; $row = $result->fetch(); $i++){
                                    
                  
               ?> 
						  
							<tr>
							  <th scope="row"><?php echo $i; ?></th>
							  <td><?php echo $row['caption']; ?></td>
							  <td><img src="../uploads/<?php echo $row['file'];?>" alt="" class="img-responsive" style=" hight="50px"; width="50px";"></td>
							  <td>
							    <a href="delete-photo.php?id=<?=$row['id'] ?>" class="fa fa-eraser btn btn-xs btn-success warning_4 delbtn" >Delete</a>
                               
							  </td>
							</tr>
							 </tbody>
							 <?php } ?>
						</table>
						</div>
						</div>
				</div>
			</div>
		</div>
		<?php include"footer.php"; ?>