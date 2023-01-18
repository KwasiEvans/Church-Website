<?php include "header.php"; ?>
  <!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Donate</li>
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
          <h1>Donate Now</h1>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4"> <a href="causes-grid.html" class="pull-right btn btn-primary">All causes</a> </div>
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
              <h2 class="post-title">Efac National Conference Centre, Abuja</h2>
            </header>
            <article class="post-content cause-item">
                <span class="post-meta meta-data">
                  <span><i class="fa fa-calendar"></i> 28th Jan, 2014</span>
                  <span><i class="fa fa-archive"></i> <a href="#">EFAC Nigeria</a>, <a href="#">Abuja</a></span>
                </span>
                <div class="spacer-20"></div>
                <div class="row">
                	<div class="col-md-7">
              			<img src="images/cause-img1.jpg" class="img-responsive">
                    </div>
                	<div class="col-md-5">
                        <ul class="list-group">
                          <li class="list-group-item">
                          	<h4>Cause Progress</h4>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" data-appear-progress-animation="11%" data-appear-animation-delay="200"></div><!-- Upto 30% use class progress-bar-danger , upto 70% use class progress-bar-warning , afterwards use class progress-bar-success -->
                            </div>
                          </li>
                      	  <li class="list-group-item"> <span class="badge">N150,000,000</span> Amount Needed </li>
                      	  <li class="list-group-item"> <span class="badge">N16,000,000</span> Collected yet </li>
                      	 <li class="list-group-item"> <span class="badge">365</span> Days left to achieve target</li>
                        </ul>
                  		<a href="#" class="btn btn-primary btn-lg btn-block donate-paypal" data-toggle="modal" data-target="#PaymentModal">Donate Now</a>
                    </div>
                </div>
                <div class="spacer-30"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
            </article>
            <!-- Payment Modal Window -->
            <div class="modal fade" id="PaymentModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="PaymentModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Donate to: <span class="accent-color payment-to-cause"></span></h4>
                  </div>
                  <div class="modal-body">
                  	<form>
                    	<div class="row">
                        	<div class="col-md-6">
                                <label>How much would you like to donate?</label>
                                <div class="input-group margin-20">
                                    <span class="input-group-addon">$</span>
                                    <select name="donation amount" class="form-control">
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="Custom">100+</option>
                                    </select>
                                </div>
                            </div>
                        	<div class="col-md-6 custom-donate-amount">
                                <label>Enter custom donation amount</label>
                                <div class="input-group margin-20">
                                    <span class="input-group-addon">$</span>
                        			<input type="text" name="Custom Donation Amount" class="form-control">
                                </div>
                            </div>
                        </div>
                    	<div class="row">
                        	<div class="col-md-6">
                        		<input type="text" name="fname" class="form-control" placeholder="First name (Required)">
                            </div>
                        	<div class="col-md-6">
                        		<input type="text" name="lname" class="form-control" placeholder="Last name">
                            </div>
                      	</div>
                    	<div class="row">
                        	<div class="col-md-6">
                        		<input type="email" name="email" class="form-control" placeholder="Your email (Required)">
                            </div>
                        	<div class="col-md-6">
                        		<input type="phone" name="phone" class="form-control" placeholder="Your phone">
                            </div>
                       	</div>
                    	<div class="row">
                        	<div class="col-md-6">
                        		<textarea rows="3" cols="5" class="form-control" placeholder="Your Address"></textarea>
                            </div>
                        	<div class="col-md-6">
                        		<textarea rows="3" cols="5" class="form-control" placeholder="Additional Notes"></textarea>
                            </div>
                       	</div>
                        <input type="submit" name="donate" class="btn btn-primary btn-lg btn-block" value="Donate Now">
                    </form>
                  </div>
                  <div class="modal-footer">
                    <p class="small short">If you would prefer to call in your donation, please call 1800.785.876</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php include"side-bar.php"; ?>
  <!-- Start Footer -->
  <?php include "footer.php"; ?>