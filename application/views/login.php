<!DOCTYPE html>
<html lang="en">
  <head prefix="og: http://ogp.me/ns#">
    <title>Job Listing | Home </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
     <?php
		$this->load->view("common/meta_links");
	?> 
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
	background:url("<?php echo base_url();?>images/banner_bg.jpg") no-repeat;
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
                                <div class="banner-heading" style="font-size:25px;font-weight:300;color:white;">Login</div>    
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
      
      
      <p style="margin-bottom:20px;"> </p>

        <section>
      <div class="container">
        <div class="row">
          <!-- <div class="col-md-12">
            <div class="box">
              <h3 class="heading">New account</h3>
              <p class="lead">Not our registered customer yet?</p>
              <p class="text-muted" style="color:black;">If you have any questions, please feel free to <a href="contact.html" style="color:blue;">contact us</a>, our customer service center is working for you 24/7.</p>
              <hr>
              <form action="client-dashboard.html" method="post">
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
                  <button type="submit" class="btn btn-primary">Signup</button>
                </div>
              </form>
            </div>
          </div> -->
		  <div class="col-md-3"></div>
           <div class="col-md-6">
            <div class="box" style="background:#fafafa;">
              <h3 class="heading">Login</h3>
              <!-- <p class="lead" >Already our customer?</p> -->
              <!-- <p class="text-muted" style="color:black;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p> -->
              <hr>
              <form action="client-dashboard.html" method="post">
                <div class="form-group">
                  <label for="email">Email</label>
                </div>
                <input id="email" type="text" class="form-control">
              <div class="form-group" style="margin-top:10px;">
                <label for="password">Password</label></br>
                <input id="password" type="password" class="form-control">
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary"><!-- <i class="fa fa-sign-in"> --></i> Log in</button>
              </div>
		    </form>
            </div>
          </div> 
		  <div class="col-md-3"></div>
        </div>
      </div>
    </section>

    </div>
  <?php
		$this->load->view("common/footer");
	?> 
</html>
