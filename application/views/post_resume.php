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
        <div class="row"   style="background:#fafafa;">
          <div class="col-lg-10 col-lg-offset-1">
            <form id="job-main-form" method="get" action="#" class="job-add-form">
              <div class="row">
                <div class="col-md-12" style="margin-top:10px;">
                  <h4 class="heading" style="font-weight:900;">Create Resume</h4>
                  <!-- <p class="text-muted text-small" style="color:black;">Some additional info for this screen about validity of the ads, etc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.     </p> -->
                  <hr>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
				<div class="form-group">
                  <label for="title" style="font-size:12px;">Most Recent Job Title</label>
				  	<div class="checkbox ">
							<label>
							  <input type="checkbox" style="font-size:12px;">I am new to the workforce
							</label>
					  </div>
					</div>
                  <div class="form-group"><input id="title" type="text" class="form-control" placeholder="your job title"></div>
				  <div class="form-group"><input id="title" type="text" class="form-control" placeholder="company name"></div>
                  <!-- <p class="help-block text-small">Example block-level help text here. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p> -->
                </div>
              </div>
			  </br>
			  <div class="row">
                <div class="col-md-6 form-group">
                  <label for="location" style="font-size:12px;">Start Date</label>
                  <input id="location" type="date" placeholder="e.g. Rio de Janeiro" class="form-control"  placeholder="15 January 2014">
                </div>
                <div class="col-md-6 form-group">
                  <label for="type" style="font-size:12px;">End Date</label>
				  <input id="location" type="date" placeholder="e.g. Rio de Janeiro" class="form-control"  placeholder="15 January 2014">
                </div>
              </div>
			  </br>
			  <div class="row">
                <div class="col-md-12 form-group">
                  <label for="location" style="font-size:12px;">Education</label>
                  <input id="education" type="text" placeholder="e.g. Rio de Janeiro" class="form-control">
                </div>
              </div>
			  </br>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="post_type" style="font-size:12px;">Maximum Salary</label>
                  <select id="post_type" data-placeholder="Choose type of the post" class="form-control select2">
                    <option style="background:#003A83;">$30,000 +</option>
                    <option style="background:#003A83;">$40,000 +</option>
					<option style="background:#003A83;">$50,000 +</option>
					<option style="background:#003A83;">$60,000 +</option>
					<option style="background:#003A83;">$70,000 +</option>
					<option style="background:#003A83;">$80,000 +</option>
					<option style="background:#003A83;">$100,000 +</option>
					<option style="background:#003A83;">$125,000 +</option>
					<option style="background:#003A83;">$150,000 +</option>
					<option style="background:#003A83;">$180,000 +</option>
					<option style="background:#003A83;">$200,000 +</option>
                  </select>
                </div>
                <!-- <div class="col-md-4 form-group">
                  <label for="apply_url">Apply URL <span class="note">(users will apply on your website)</span></label>
                  <input id="apply_url" type="url" class="form-control">
                </div>
                <div class="col-md-4 form-group">
                  <label for="validity">Validity of the post</label>
                  <input id="validity" type="date" class="form-control">
                </div> -->
              </div>
			  </br>
			   <div class="row">
                <div class="col-md-12 form-group">
                  <label for="post_type" style="font-size:12px;">Willing to Travel</label>
                  <select id="post_type" data-placeholder="Choose type of the post" class="form-control select2">
                    <option style="background:#003A83;">5km</option>
                    <option style="background:#003A83;">10km</option>
					<option style="background:#003A83;">15km</option>
					<option style="background:#003A83;">20km</option>
					<option style="background:#003A83;">25km</option>
					<option style="background:#003A83;">30km</option>
					<option style="background:#003A83;">40km</option>
					<option style="background:#003A83;">50km</option>
					<option style="background:#003A83;">60km</option>
					<option style="background:#003A83;">70km</option>
					<option style="background:#003A83;">100km</option>
					<option style="background:#003A83;">120km</option>
                  </select>
                </div>
				</div>
				</br>
			  <div class="row">
                <div class="col-md-12">
                  <label for="post_type" style="font-size:12px;">Relocate</label>
                </div>
                 <div class="col-md-12 form-group checkbox">
                  				  
							<label>
							  <input type="checkbox" style="font-size:12px;">Yes
							</label>
                </div>
				                 <div class="col-md-12 form-group checkbox">
                  				  
							<label>
							  <input type="checkbox" style="font-size:12px;">No
							</label>
                </div>
				<div class="col-md-12 form-group checkbox">
                  				  
							<label>
							  <input type="checkbox" style="font-size:12px;">Possibly
							</label>
                </div>
              </div>
			  </br>
			 <div class="row">
				<div class="col-md-6 form-group">
                  <label for="location" style="font-size:12px;">Attached Resume</label>
                  <input id="education" type="file" placeholder="e.g. Rio de Janeiro" class="form-control">
                </div>
				<div class="col-md-6 form-group">
                  <label for="location" style="font-size:12px;">Attached Cover Letter</label>
                  <input id="education" type="file" placeholder="e.g. Rio de Janeiro" class="form-control">
                </div>
              </div>
			  </br>
			  <div class="row">
                <div class="col-md-12 form-group">
                  <label for="post_type" style="font-size:12px;">Privacy</label>
                  <select id="post_type" data-placeholder="Choose type of the post" class="form-control select2">
                    <option style="background:#003A83;">Standard</option>
                    <option style="background:#003A83;">Limited</option>
                  </select>
                </div>
				</div>
			  <!-- <div class="row">
                <div class="col-md-12 form-group">
                  <label for="text" style="font-size:12px;">Job Description</label>
				  <textarea class="form-control ckeditor" id="editor" placeholder="Share what you are thinking here..." name="status"></textarea>
                </div>
              </div> -->
              <!-- <div class="row">
                <div class="col-md-12">
                  <h4><strong style="font-weight:900;">Company Information</strong></h4>
                  <hr>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-2"><label for="company_name" class="" style="font-size:12px;">Company name</label></div>
                  <div class="col-md-8">
					  <input id="company_name" type="text" class="form-control" class="">
					  <div class="checkbox ">
							<label>
							  <input type="checkbox" style="font-size:12px;">Keep company name confidential
							</label>
					  </div>
				  </div>
                </div>
              </div> -->
			  </br>
				
              <!-- <div class="row">
                <div class="col-md-12 form-group">
                  <label for="company_description">Company Description</label>
                  <textarea id="company_description" rows="3" class="form-control"></textarea>
                  <p class="help-block text-small">Example block-level help text here. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                </div>
              </div> -->
              <!-- <div class="row">
					<div class="form-group">
					  <div class="col-md-2"><label for="company_logo" style="font-size:12px;">Company Logo</label></div>
					  <div class="col-md-8">
						<div class="form-group">
						  <input id="company_logo" type="file" class="form-control">
						</div>
						<div class="checkbox ">
							<label>
							  <input type="checkbox" style="font-size:12px;">Use a company logo
							</label>
						</div>
					   </div>
					</div>
              </div> -->
			  </br>
			  <!-- <div class="row">
                <div class="form-group">
                  <div class="col-md-2"><label for="location" style="font-size:12px;">Contact Name</label></div>
                  <div class="col-md-8"><input id="location" type="text" placeholder="name" class="form-control"></div>
                </div>
			  </div>
			  </br>
			  <div class="row">
                <div class="form-group">
                  <div class="col-md-2"><label for="type" style="font-size:12px;">Contact Number</label></div>
				  <div class="col-md-8"><input id="location" type="text" placeholder="phone number" class="form-control"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <hr>
                  <div class="checkbox text-center">
                    <label>
                      <input type="checkbox"> <u style="font-size:12px;">Company Information Displayed on Job Post <a href="#">Terms and conditions</a>.</u>
                    </label>
                  </div>
				  <p class="help-block text-small" style="font-size:12px;">If not ticked then all jobs to go thru our websites meaning whenever someone applies for the job it should go direct to the employer advertiser but not display his contact details to the person looking for work</p>
                </div>
              </div>--->
              <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12 text-center">
                  <hr>
                  <button type="submit" class="btn btn-success"> <i class="fa fa-magic">Load The Resume</button>
                </div>
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
