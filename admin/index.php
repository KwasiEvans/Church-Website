<?php include "header.php"; ?> 
			<div id="page-wrapper">
				<div class="graphs">
					<div class="col_3">
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="fa fa-users"></i>
								<div class="stats">
								  <h5>45 </h5>
								  <div class="grow">
									<p>Registered</p>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="fa fa-comment"></i>
								<div class="stats">
				<?php
                // include('../connect.php');
				$result = $db->prepare("SELECT count(*) as total FROM news");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                ?>
								  <h5><?php echo $row['total']; ?> </h5>
								  <div class="grow grow1">
									<p>Total News</p>
								  </div><?php } ?>
								</div>
							</div>
						</div>
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="fa fa-eye"></i>
								<div class="stats">
								<?php
                           // include('../connect.php');
				$result = $db->prepare("SELECT count(*) as total FROM events");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){


               ?>
								  <h5><?php echo $row['total']; ?></h5>
								  <div class="grow grow3">
									<p>Total Events</p>
								  </div> <?php } ?>
								</div>
							</div>
						 </div>
						 <div class="col-md-3 widget">
							<div class="r3_counter_box">
								<i class="fa fa-inbox"></i>
								<div class="stats">
								<?php
                           // include('../connect.php');
				$result = $db->prepare("SELECT count(*) as total FROM table_admin");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){


               ?>
								  <h5><?php echo $row['total']; ?> </h5>
								  <div class="grow grow2">
									<p>Total Admins</p>
								  </div>
								  <?php } ?>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>

			<!-- switches -->
		<!-- //switches -->
		<div class="col_1">
			<div class="col-md-4 span_8">
				<div class="activity_box">
					<h3>Inbox</h3>
					<div class="scrollbar scrollbar1" id="style-2">
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/1.png' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">John Smith</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/5.png' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">Andrew Jos</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/3.png' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">Adom Smith</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/4.png' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">Peter Carl</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/1.png' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">John Smith</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 span_8">
				<div class="activity_box activity_box1">
					<h3>chat</h3>
					<div class="scrollbar" id="style-2">
						<div class="activity-row activity-row1">
							<div class="col-xs-3 activity-img"><img src='images/1.png' class="img-responsive" alt=""/><span>10:00 PM</span></div>
							<div class="col-xs-5 activity-img1">
								<div class="activity-desc-sub">
									<h5>John Smith</h5>
									<p>Hello !</p>
								</div>
							</div>
							<div class="col-xs-4 activity-desc1"></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row activity-row1">
							<div class="col-xs-2 activity-desc1"></div>
							<div class="col-xs-7 activity-img2">
								<div class="activity-desc-sub1">
									<h5>Adom Smith</h5>
									<p>Hi,How are you ? What about our next meeting?</p>
								</div>
							</div>
							<div class="col-xs-3 activity-img"><img src='images/3.png' class="img-responsive" alt=""/><span>10:02 PM</span></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row activity-row1">
							<div class="col-xs-3 activity-img"><img src='images/1.png' class="img-responsive" alt=""/><span>10:00 PM</span></div>
							<div class="col-xs-5 activity-img1">
								<div class="activity-desc-sub">
									<h5>John Smith</h5>
									<p>Yeah fine</p>
								</div>
							</div>
							<div class="col-xs-4 activity-desc1"></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row activity-row1">
							<div class="col-xs-2 activity-desc1"></div>
							<div class="col-xs-7 activity-img2">
								<div class="activity-desc-sub1">
									<h5>Adom Smith</h5>
									<p>Wow that's great</p>
								</div>
							</div>
							<div class="col-xs-3 activity-img"><img src='images/3.png' class="img-responsive" alt=""/><span>10:02 PM</span></div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<form>
						<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
						<input type="submit" value="Send" required=""/>		
					</form>
				</div>
			</div>
			<div class="col-md-4 span_8">
				<div class="activity_box activity_box2">
					<h3>todo</h3>
					<div class="scrollbar" id="style-2">
						<div class="activity-row activity-row1">
							<div class="single-bottom">
								<ul>
									<li>
										<input type="checkbox"  id="brand" value="">
										<label for="brand"><span></span> Sunt in culpa qui officia.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand1" value="">
										<label for="brand1"><span></span> Fugiat quo voluptas nulla.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand2" value="">
										<label for="brand2"><span></span> Dolorem eum.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand9" value="">
										<label for="brand9"><span></span> Pain that produces no resultant.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand8" value="">
										<label for="brand8"><span></span> Cupidatat non proident.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand7" value="">
										<label for="brand7"><span></span> Praising pain was born.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand3" value="">
										<label for="brand3"><span></span> Computer & Electronics</label>
									</li>
									<li>
										<input type="checkbox"  id="brand4" value="">
										<label for="brand4"><span></span> Dolorem ipsum quia.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand5" value="">
										<label for="brand5"><span></span> Consequatur aut perferendis.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand6" value="">
										<label for="brand6"><span></span> Dolorem ipsum quia.</label>
									</li>
									
									
								</ul>
							</div>
						</div>
					</div>
					<form>
						<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
						<input type="submit" value="Submit" required=""/>		
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			
		</div>
				</div>
			<!--body wrapper start-->
			</div>
			 <!--body wrapper end-->
		</div>
        <?php include "footer.php"; ?>