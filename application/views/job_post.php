<!DOCTYPE html>
<html lang="en">
  <head prefix="og: http://ogp.me/ns#">
    <title>Job Listing | Home </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
  <?php
	 $this->load->view("common/meta_links");
?> 
	<script type="text/javascript" src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
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
	background:url("<?php echo base_url();?>images/post-banner.jpg") no-repeat;
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
	 $this->load->view("common/header.php");
?> 
    </div>
			   <div class="simple_bannenr" style="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                 <!-- <div class="work-timee" style="font-size:18px;margin-bottom:5px;">Full Time</div>  -->
                                <div class="banner-heading" style="font-size:25px;font-weight:700;color:white;">Post A Job</div>    
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
            <form id="job-main-form" method="get" action="#" class="job-add-form">
              <div class="row">
                <div class="col-md-12" style="margin-top:10px;">
                  <h4 class="heading" style="font-weight:900;">Job details</h4>
                  <!-- <p class="text-muted text-small" style="color:black;">Some additional info for this screen about validity of the ads, etc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.     </p> -->
                  <hr>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="title" style="font-size:12px;">Job Title</label>
                  <input id="title" type="text" class="form-control">
                  <!-- <p class="help-block text-small">Example block-level help text here. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p> -->
                </div>
              </div>
              <!-- <div class="row">
                <div class="col-md-12 form-group">
                  <label for="text">Job Description</label>
                  <textarea id="text" rows="5" class="form-control"></textarea>
                  <p class="help-block text-small">Example block-level help text here. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                </div>
              </div> -->
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="category" style="font-size:12px;">Job ad category</label>
                  <select id="category" multiple="multiple" placeholder="Choose category" class="form-control select2"> 
                    <option value="10" style="font-size:12px;">Accounting</option>
												 <option value="20">Administration & Office Support</option>
												 <option value="20">Advertising, Arts & Media</option>
												 <option value="20">Banking & Financial Services</option>
												 <option value="20">Call Centre & Customer Service</option>
												 <option value="20">Community Services & Development</option>
												 <option value="20">Design & Architecture</option>
												 <option value="20">Education & Teaching</option>
												 <option value="20">Engineering</option>
												 <option value="20">Farming & Veterinary</option>
												 <option value="20">Government & Defence</option>
												 <option value="20">Healthcare & Nursing</option>
												 <option value="20">Hospitality & Tourism</option>
												 <option value="20">Information & Communication Technology</option>
												 <option value="20">Legal</option>
												 <option value="20">Manufacturing, Transport & Logistics</option>
												 <option value="20">Marketing & Communications</option>
												 <option value="20">Mining, Resources & Energy</option>
												 <option value="20">Real Estate & Property</option>
												 <option value="20">Recruitment & HR</option>
												 <option value="20">Retail</option>
												 <option value="20">Sales</option>
												 <option value="20">Sports & Recreation</option>
												 <option value="20">Trades & Services</option>
												 <option value="20">Other Jobs</option>
                  </select>
                </div>
              </div>
			  <div class="row">
                <div class="col-md-6 form-group">
                  <label for="location" style="font-size:12px;">Location</label>
                  <input id="location" type="text" placeholder="e.g. Rio de Janeiro" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                  <label for="type" style="font-size:12px;">Type</label>
                  <select id="type" placeholder="Choose job type" class="form-control select2">
                    <option>Full-time</option>
                    <option>Part-time</option>
                    <option>Internship</option>
                  </select>
                </div>
              </div>
              <!-- <div class="row">
                <div class="col-md-12 form-group">
                  <label for="tag">Tags</label>
                  <select id="tag" multiple="multiple" placeholder="Choose tags" class="form-control select2">
                    <option>HTML</option>
                    <option>CSS</option>
                    <option>Ruby on Rails</option>
                    <option>PHP</option>
                    <option>Python</option>
                    <option>React</option>
                  </select>
                </div>
              </div> -->
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="post_type" style="font-size:12px;">Salary Details (optional)</label>
                  <select id="post_type" data-placeholder="Choose type of the post" class="form-control select2">
                    <option style="background:#003A83;">$30k +</option>
                    <option style="background:#003A83;">$40k +</option>
					<option style="background:#003A83;">$50k +</option>
					<option style="background:#003A83;">$60k +</option>
					<option style="background:#003A83;">$70k +</option>
					<option style="background:#003A83;">$80k +</option>
					<option style="background:#003A83;">$100k +</option>
					<option style="background:#003A83;">$125k +</option>
					<option style="background:#003A83;">$150k +</option>
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
			  <div class="row">
                <div class="col-md-12 form-group">
                  <label for="text" style="font-size:12px;">Job Description</label>
                  <!-- <textarea id="text" rows="5" class="form-control"></textarea> -->
				  <textarea class="form-control ckeditor" id="editor" placeholder="Share what you are thinking here..." name="status"></textarea>
                  <!-- <p class="help-block text-small">Example block-level help text here. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                </div> -->
              </div>
              <div class="row">
                <div class="col-md-12">                           
                  <hr class="margin-bottom--big">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <h4><strong style="font-weight:900;">Company Information</strong></h4>
                  <!-- <p class="text-muted text-small" style="color:black;">Some additional info for this screen about validity of the ads, etc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.     </p> -->
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
              </div>
			  </br>
				
              <!-- <div class="row">
                <div class="col-md-12 form-group">
                  <label for="company_description">Company Description</label>
                  <textarea id="company_description" rows="3" class="form-control"></textarea>
                  <p class="help-block text-small">Example block-level help text here. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                </div>
              </div> -->
              <div class="row">
                <!-- <div class="col-md-4 form-group">
                  <label for="company_website">Website</label>
                  <input id="company_website" type="url" class="form-control">
                </div> -->
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

				
                <!-- <div class="col-md-4 form-group">
                  <label for="company_twitter">Twitter</label>
                  <input id="company_twitter" placeholder="@getbootstrap" class="form-control">
                </div> -->
              </div>
			  </br>
			  <div class="row">
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
              </div>
              <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12 text-center">
                  <hr>
                  <button type="submit" class="btn btn-success"> <i class="fa fa-magic">post job</button>
                  <!-- <button type="submit" class="btn btn-default"> <i class="fa fa-save"></i> Save draft</button> -->
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
