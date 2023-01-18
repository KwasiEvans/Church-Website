<?php include "header.php"; ?>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					
					<div class="xs">
						
						<div class="col-md-8 inbox_right">
							<div class="Compose-Message">               
								<div class="panel panel-default">
									<div class="panel-heading">
									Edit Site Settings
									</div>
									<?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully edited site settings!")?>
                                            </div>
                                            <?php endif;?>
									<div class="panel-body panel-body-com-m">
										 <?php
                            //include('../connect.php');
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
               ?> 
                <form class="com-mail"  action="save-setting.php" method="post" enctype="multipart/form-data">
											
												<label>Site Name : </label>
												<input type="text" name="site_name" value="<?php echo $row['site_name']; ?>" class="form-control1 control3">
												<label>Site Title : </label>
												<input type="text" name="site_title" value="<?php echo $row['site_title']; ?>" class="form-control1 control3">
												<label>Site Email : </label>
												<input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control1 control3">
												<label>Site Description </label>
												<input type="text" name="site_desc" value="<?php echo $row['site_desc']; ?>" class="form-control1 control3"></textarea>
												<label>Site Keywords </label>
												<input type="text" name="site_keyword" value="<?php echo $row['site_keyword']; ?>" class="form-control1 control3">
												<label>Google Analytic Code </label>
												<input type="text" name="google_code" value="<?php echo $row['google_code']; ?>" class="form-control1 control3"></textarea>
												<label>Street Name</label>
												<input type="text" name="street" value="<?php echo $row['street']; ?>" class="form-control1 control3">
												<label>City </label>
												<input type="text" name="city" value="<?php echo $row['city']; ?>"class="form-control1 control3">
												<label>Country </label>
												<input type="text" name="country" value="<?php echo $row['country']; ?>" class="form-control1 control3">
												<label>Phone 1</label>
												<input type="text" name="phone" value="<?php echo $row['phone']; ?>"class="form-control1 control3">
												<label>Phone 2</label>
												<input type="text" name="linkedin" value="<?php echo $row['linkedin']; ?>" class="form-control1 control3">
												<label>Facebook Page ID</label>
												<input type="text" name="facebook" value="<?php echo $row['facebook']; ?>" class="form-control1 control3">
												<label>Twitter Account </label>
												<input type="text" name="twitter" value="<?php echo $row['twitter']; ?>" class="form-control1 control3">
												<label>Instagram </label>
												<input type="text" name="status" value="<?php echo $row['status']; ?>" class="form-control1 control3">
												
												
			      		<hr>
											<input type="submit" value="Save Settings">
										</form><?php
}
?>
									</div>
								 </div>
							  </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<?php include "footer.php"; ?>