<!DOCTYPE html>
<html lang="en">
  <head prefix="og: http://ogp.me/ns#">
    <title>Job Listing | Home </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <?php
		$this->load->view("common/meta_links");
	?>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script>

 CKEDITOR.replace( 'editor' );
</script>
	<style>
	.work-timee{
	color: #fff !important;
    background-color: #5cc069;
    font-size: 13px;
    display: inline-block;
    border-radius: 3px;
    margin-top: 32px;
    padding: 2px 5px !important;
	}
	.simple_bannenr{
	background:url("<?php echo base_url();?>images/banner.jpg") no-repeat;
    border-bottom: solid 1px #f2f2f2;
    padding: 85px 0px;
    width: 100%;
	}
	</style>
  </head>
  <body>
    <div id="adbanner-container" class="adbanner-container-display">
      <div id="header-adbanner">
      </div>
    </div>
    <div id="header-container">
       <?php
		$this->load->view("common/header");
	?>
    </div>
			   <div class="simple_bannenr" style="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                 <!-- <div class="work-timee" style="font-size:18px;margin-bottom:5px;">Full Time</div>  -->
                                <div class="banner-heading" style="font-size:25px;font-weight:700;color:white;">Post Resume</div>    
                            </div>  
                        </div>
                    </div>
                </div>
    <div class="container results-container">
      <!--<div class="row">
        <div class="col-sm-12">
          <ol class="breadcrumb small">
            <li>
              <a href="#" style="color:black;">Jobs
              </a>
              <span class="separator">
              </span>
            </li>
            <li>
              <a href="#" style="color:black;">IT
              </a>
              <span class="separator">
              </span>
            </li>
            <li style="color:black;">PHP Developer
            </li>
          </ol>
        </div>
      </div>-->
	
    <section style="padding-top:50px;">
      <div class="container">
        <div class="row"  style="background:#fafafa;">
          <div class="col-lg-10 col-lg-offset-1">
            <form id="job-main-form" method="get" action="<?php echo base_url();?>post_resume" class="job-add-form">
              <div class="row">
                <div class="col-md-12" style="margin-top:10px;">
                  <h4 class="heading" style="font-weight:900;">Create Resume</h4>
                  <!-- <p class="text-muted text-small" style="color:black;">Some additional info for this screen about validity of the ads, etc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.     </p> -->
                  <hr>
                </div>
              </div>
                <div class="form-group col-md-6">
                  <label for="name">First Name</label>
                  <input id="name" type="text" class="form-control">
                </div>
				<div class="form-group col-md-6">
                  <label for="name">Last Name</label>
                  <input id="name" type="text" class="form-control">
                </div>
                <div class="form-group col-md-12">
                  <label for="email">Email</label>
                  <input id="email" type="text" class="form-control">
                </div>
				<div class="form-group col-md-6">
                  <label for="name">Phone Number</label>
                  <input id="name" type="text" class="form-control">
                </div>
				<div class="form-group col-md-6">
                  <label for="name">Postcode</label>
                  <input id="name" type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="password">Password</label>
                  <input id="password" type="password" class="form-control">
                </div>
				<div class="form-group col-md-6">
                  <label for="password">Re Enter Password</label>
                  <input id="password" type="password" class="form-control">
                </div>
				<div class="row">
					<div class="col-md-12">
					  <hr>
					  <div class="checkbox text-center">
						<label>
						  <input type="checkbox">By registering you agree to ResumeBroswe.com privacy policy <a href="#" style="color:blue;">Terms and conditions</a>.
						</label>
					  </div>
					</div>
				</div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary"><!-- <i class="fa fa-user-md"></i>  -->Signup</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </section>
      
      <p style="margin-bottom:20px;"> </p>

        



    </div>
  <?php
	$this->load->view("common/footer");
	?>
  <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
</html>
