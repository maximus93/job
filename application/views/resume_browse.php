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
	.filter-col{
		padding-left:10px;
		padding-right:10px;
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
					<div class="banner-heading" style="font-size:25px;font-weight:700;color:white;">Resume Browse</div>    
				</div>  
			</div>
		</div>
	</div>
    <div class="container results-container">	
    <section style="padding-top:50px;padding-bottom:40px;">
      <div class="container">
        <div class="row"   style="background:#fafafa;">
          <div class="col-lg-10 col-lg-offset-1">
            <form method="POST" action="<?php echo base_url();?>browse_candidate">
              <div class="row">
                <div class="col-md-12" style="margin-top:10px;">
                  <h4 class="heading" style="font-weight:900;">Search Resumes</h4>
                  <hr>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="title" style="font-size:12px;">Job Title</label>
                  <input id="title" type="text" class="form-control">
                </div>
				<div class="col-md-6 form-group">
                  <label for="title" style="font-size:12px;">Year of Experience</label>
                  <input id="title" type="text" class="form-control">
                </div>
              </div>
			  <div class="row">
                <div class="col-md-6 form-group">
                  <label for="location" style="font-size:12px;">Location</label>
                  <input id="location" type="text" placeholder="e.g. Rio de Janeiro" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                  <label for="type" style="font-size:12px;">Within</label>
                  <select id="type" placeholder="Choose job type" class="form-control">
                    <option>5km</option>
                    <option>10km</option>
                    <option>15km</option>
                  </select>
                </div>
              </div>
			  <div class="row">
                <div class="col-md-12 form-group">
                  <label for="type" style="font-size:12px;">Country</label>
                  <select id="type" placeholder="Choose job type" class="form-control select2">
                    <option>Australia</option>
                    <option>Bangladesh</option>
                    <option>China</option>
					<option>Denmark</option>
					<option>Egypt</option>
					<option>France</option>
					<option>Germany</option>
					<option>India</option>
					<option>Newzeland</option>
					<option>Portugal</option>
					<option>Russia</option>
					<option>Spain</option>
					<option>United States (US)</option>
					<option>United Kingdom (UK)</option>
                  </select>
                </div>
              </div>
			  <div class="row">
                <div class="col-md-12 ">
                  <label for="location" style="font-size:12px;">Resume Freshneszs</label>
                </div>
                <div class="col-md-2 ">
                 	<div class="checkbox ">
							<label>
							  <input type="checkbox" style="font-size:12px;">Last Activity
							</label>
					  </div>
                </div>
				<div class="col-md-2">
                 	<div class="checkbox ">
							<label>
							  <input type="checkbox" style="font-size:12px;">Last Modified
							</label>
					  </div>
                </div>
				<div class="col-md-12 form-group">
                  <select id="type" placeholder="Choose job type" class="form-control select2">
                    <option>within 3 months</option>
                    <option>within 4 months</option>
                    <option>within 6 months</option>
                  </select>
                </div>
              </div>
			  <div class="row form-group ">
			  <div class="col-md-12">
				<label for="location" style="font-size:12px;">Skills/Keywords</label>
			  </div>
				<div class="col-md-12">
				<div class="addsz">
                  <input id="location" type="text" placeholder="e.g. ios,androied,php-mysqli" class="form-control">
                </div>
			 <p class="add_something" style="margin-top:11px;" >Add Another Skills</p>
			 </div>
			  </div>
			  <!-- <div class="row">
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
              </div> -->
			  <div class="row  col-md-12">
        <div id="filter-panel" class="collapse filter-panel">
            <div class="panel panel-default">
                <div class="panel-body">
                  
						 <div class="form-group">
                            <label class="" style="margin-right:0;font-size:12px;" for="pref-search">Education</label>
                            <input type="text" class="form-control input-sm" id="pref-search">
                        </div>
                        <div class="form-group">
                            <label class="" style="margin-right:0;font-size:12px;" for="pref-perpage">Maximum Salary</label>
                            <select id="pref-perpage" class="form-control">
                                <option value="2">$30,000 +</option>
                                <option value="3">$40,000 +</option>
                                <option value="4">$50,000 +</option>
                                <option value="5">$60,000 +</option>
                                <option value="6">$70,000 +</option>
                                <option value="7">$80,000 +</option>
                                <option value="8">$100,000 +</option>
                                <option value="9">$125,000 +</option>
                                <option selected="selected" value="10">$20,000 +</option>
                                <option value="15">$150,000 +</option>
                                <option value="20">$180,000 +</option>
                                <option value="30">$200,000 +</option>
                            </select>                                
                        </div> <!-- form group [rows] -->
						<!-- <div class="form-group">
                            <label class="" style="margin-right:0;font-size:12px;" for="pref-search">Willing to Travel</label>
                            <input type="text" class="form-control input-sm" id="pref-search">
                        </div>
						<div class="form-group">
                            <label class="" style="margin-right:0;font-size:12px;" for="pref-search">Relocate</label>
                            <input type="text" class="form-control input-sm" id="pref-search">
                        </div>
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-orderby">Order by:</label>
                            <select id="pref-orderby" class="form-control">
                                <option>Descendent</option>
                            </select>                                
                        </div> --> <!-- form group [order by] --> 
                        <div class="form-group">    
                            <div class="checkbox" style="margin-left:10px; margin-right:10px;">
                                <label><input type="checkbox"> Remember parameters</label>
                            </div>
                            <button type="submit" class="btn btn-success filter-col">
                                <span class="glyphicon glyphicon-record"></span> Browse
                            </button>  
                        </div>
						  <div class="row">
			      <div class="col-md-12 form-group">
                  <label for="location" style="font-size:12px;">Willing To Travel</label>
                  <input id="location" type="text" placeholder="Willing To Travel" class="form-control">
                </div>
			</div>
			  <div class="row">
			      <div class="col-md-12 form-group">
                  <label for="location" style="font-size:12px;">Relocate</label>
                  <input id="location" type="text" placeholder="Relocate" class="form-control ">
                </div>
			</div>
                   
                </div>
            </div>
        </div> 
		<div style="margin-top:15px;">
		 <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
            <span class="glyphicon glyphicon-cog"></span> Advanced Search
		</button>
		</div>
	</div>
            
              <div class="row" style="margin-bottom:20px;margin-top:15px;">
                <div class="col-md-12 text-right">
                  <input type="submit" class="btn btn-success" name="browse" value="Browse" >
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

			<script>
				$(document).ready(function() {
			var max_fields      = 10; //maximum input boxes allowed
			var wrapper         = $(".addsz"); //Fields wrapper
			var add_button      = $(".add_something"); //Add button ID
			
			var x = 1; //initlal text box count
			$(add_button).click(function(e){ //on add input button click
				
				e.preventDefault();
				if(x < max_fields){ //max input box allowed
					x++; //text box increment
					$(wrapper).append("<div style='margin-top:10px;'><div class='col-md-11' style='padding:0px 0px 0px 0px;'><input id='location' type='text'  placeholder='e.g. ios,androied,php-mysqli' class='form-control '></div>&nbsp;<a href='#' class='remove_field btn red'><div class='col-md-1' style='padding:0px 0px 0px 0px;'><img src='images/if_Remove_27874.png' style='height:20px;width:20px;margin-top:-10px;'></div></a></div>"); //add input box
				}
			});
			
			$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
				e.preventDefault(); $(this).parent('div').remove(); x--;
			})
		});
			
		</script>
</html>
