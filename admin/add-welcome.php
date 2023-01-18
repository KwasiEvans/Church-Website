<?php include "header.php"; ?>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					
					<div class="xs">
						
						<div class="col-md-8 inbox_right">
							<div class="Compose-Message">               
								<div class="panel panel-default">
									<div class="panel-heading">
									Edit About Us
									</div>
									<?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully edited welcome note!")?>
                                            </div>
                                            <?php endif;?>
									<div class="panel-body panel-body-com-m">
										<?php
				$result = $db->prepare("SELECT * FROM welcome");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
				?>  
			   <form class="com-mail" action="save-welcome.php" method="post" enctype="multipart/form-data">
			   <label>Edit Welcome Address</label>
												<textarea rows="3" name="body" class="form-control1 control2" <?php echo $row['body'];?>></textarea>
												 <script>
                CKEDITOR.replace( 'you' );
            </script>
			      		<hr>
											<input type="submit" value="Save Info">
										</form>
										<?php } ?>
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