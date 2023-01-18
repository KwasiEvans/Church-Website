<?php include "header.php"; ?>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
				
					<div class="xs">
						
						<div class="col-md-8 inbox_right">
							<div class="Compose-Message">               
								<div class="panel panel-default">
									<div class="panel-heading">
										Add Excos
									</div>
									<?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully saved information!")?>
                                            </div>
                                            <?php endif;?>
									<div class="panel-body panel-body-com-m">
										
										<form class="com-mail" action="save-exco.php" method="post" enctype="multipart/form-data">
											
												<label>Name : </label>
												<input type="text" name="name" class="form-control1 control3">
												<label>Office : </label>
												<input type="text" name="office" class="form-control1 control3">
												<label>Zone/ Diocese : </label>
												<input type="text" name="zone" class="form-control1 control3">
												<label>Phone : </label>
												<input type="text" name="phone" class="form-control1 control3">
												<label>Email : </label>
												<input type="text" name="email" class="form-control1 control3">
											<hr>
											<input type="submit" value="Submit Admin">
										</form>
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