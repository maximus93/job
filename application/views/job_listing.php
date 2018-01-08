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
	background:url("<?php echo base_url();?>images/listing-banner.jpg") no-repeat left top/cover;
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
                                <div class="banner-heading" style="font-size:25px;font-weight:300;color:white;">Job Listing</div>    
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

        
      <div class="row job-results-row" style="margin-bottom:40px;">
        <div class="col-sm-12 reset-to-row equal-height">
         
		  <?php
			$this->load->view("common/left_sidebar");
		?>
          <div class="col-sm-9 job-results clearfix">
            <div class="row" >
			
              <div class="col-xs-12 job-results clearfix">
				<div class="show-for-large-up sort-by" id="sort-links">
				<div class="sorting-options">
					Sort By:
					<a class="selected-sort-option" href="#" style="color:#06c">Relevance</a>
						|
					<a href="#" style="color:#06c">Date</a>
					|
					<a href="#" style="color:#06c">Distance</a>
				</div>
			</div>
                <?php
                  print_r($job_details);
                  foreach ($job_details as $fetch_job) { 
                ?>
                <div class="job new " id="77913552">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="job-title">
                        <a href="<?php echo base_url();?>job_details/<?php echo $fetch_job->job_id;?>" title="See details for a PHP Developer ( Laravel ) in Southampton (matches on php developer)">
                          <h2 style="color:#06c;"><?php echo $fetch_job->job_title;?>
                          </h2>
                        </a>
                      </div>
                      <div class="detail-body">
                        <div class="row">
                          <div id="headerListContainer" class="col-xs-12 col-sm-8">
                            <div class="applied-col pull-right" style="display: none;">
                              <span class="applied-icon">Applied
                              </span>
                            </div>
                            <ul class="header-list">
                              <li class="location">
                                <span>
                                  <span>
                                    <a href="#" style="color:black;"><?php echo $fetch_job->location;?>
                                    </a>
                                  </span>
                                </span>
                              </li>
                              <li class="salary" title="salary"><i class="fa fa-usd" aria-hidden="true"></i><?php echo $fetch_job->salary_details;?>
                              </li>
                            </ul>
                          </div>
                          <div id="recruiterImageContainer" class="col-xs-5 col-sm-4 pull-right">
                            <div class="recruiter-image">
                              <a href="#" title="Spectrum IT Recruitment (South) Ltd">
                                <img src="<?php echo base_url();?>uploads/<?php echo $fetch_job->company_logo;?>" />
                              </a>
                            </div>
                          </div>
                          <div class="col-xs-7 col-sm-8">
                            <ul class="detail-list">

                              <li class="company" title="hiring organization">
                                <h3>
                                  <a href="#" title="Spectrum IT Recruitment (South) Ltd" style="color:black;"><?php echo (($fetch_job->name_status == 'yes')?'Company Name Hidden':$fetch_job->company_name);?>
                                  </a>
                                </h3>
                              </li>

                            </ul>
                          </div>
                        </div>
                        <div class="row detail-footer">
                          <div class="col-sm-12 col-md-10">
                            <div title="job details">
                              <p class="job-intro">
                               <?php echo $fetch_job->job_description;?>
                              </p>
                            </div>
                          </div>
                          <div class="email-job-col visible-xs visible-sm col-xs-4 col-md-2 col-sm-4">
                            <button type="button" class="btn btn-default btn-sendjob" data-job-id="77913552" data-job-token="HWslqDKQw05oLDiF1Fo8ZWbrbQPV3OWtzCed8XkFwphSteX+Cy4Ehr6Ps0cK4NMv" data-toggle="modal" data-target="#sendJobModal">Send
                            </button>
                          </div>
                          <div class="see-job-col visible-xs visible-sm col-xs-4 col-sm-4 col-md-4 ">
                            <a class="btn btn-default btn-seejob" href="#" data-dynamic-qs="?entryurl=%2fjobs%2fphp-developer%2377913552">See
                            </a>
                          </div>
                          <div class="save-job-col col-xs-4 col-sm-4 col-md-2">
                            <button id="77913552" class="saved-jobs-icon btn btn-default btn-savejob btn-mobile-hover-fix"  >Save
                            </button>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                }
                ?>    

        
                <div class="row" >
                  <div class="col-xs-12">
                    <div class="results-footer-links-container">
                      <?php echo $links;?>
                      <div id="mobileFilters">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12" id="desktopRelatedJobs">
                  </div>
                </div>
                <!-- <div class="row adblock-row">
<div id="adblock" class="adblock"></div>
</div> -->
              </div>
              <div class="modal fade" id="sendJobModal" tabindex="-1" role="dialog" aria-labelledby="sendJobModal" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-body">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="close-btn">
                        </span>
                      </button>
                      <h3 class="brand-font">Email this job
                      </h3>
                      <form>
                        <div id="email-job">
                          <div class="form-group">
                            <p>Email address:
                            </p>
                            <input id="emailMeThisJob" type="email" placeholder="name@example.com" class="form-control" />
                            <div id="SendJobEmptyEmail" class="alert alert-danger alert-danger-icon alert-extensions" style="display: none;">Please enter your email address.
                            </div>
                            <div id="SendJobInvalidEmail" class="alert alert-danger alert-danger-icon alert-extensions" style="display: none;">Please enter a valid email address.
                            </div>
                          </div>
                          <div class="form-group text-center">
                            <input id="sendJobByEmail" type="submit" value="Send job" class="btn btn-primary btn-lg"/>
                          </div>
                        </div>
                        <div id="send-job-confirmation" class="alert alert-success alert-success-icon" style="display: none;">
                          This job has been emailed to:
                          <br/>
                          <span id="confirmationEmail" class="confirmationEmail">
                          </span>
                        </div>
                      </form>
                      <div class="text-center">
                        <a data-dismiss="modal" aria-label="Close" href="#">Close this window
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="jbe-dialog-container">
              </div>
              <div id="jbe-dialog-onload-container">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row" style="border:1px solid red;margin-bottom:40px;">
<div class="col-sm-12">
<div class="to-top-link">
<a id="scroll-to-top" href="#"><span class="to-top-icon" style="color:black;"></span>To top</a>
</div>
</div>
</div> -->
      <div class="mobile-locations-drilldown visible-xs-block">
        <div class="row location-drilldown-row expand-item">
          <div class="col-xs-12">
            <div class="locations-drilldown-container">
              <div class="row locations-drilldown">
                <div class="visible-xs col-xs-12">
                  <span class="drilldown-nav-arrow">
                  </span>
                  <a class="drilldown-toggle">Filter by location
                  </a>
                </div>
                <div class="col-xs-12 col-sm-10 drilldown-container collapsed">
                  <ul class="list-unstyled row locations-drilldown-links">
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for London PHP Developer jobs">PHP Developer jobs in London
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for City PHP Developer jobs">PHP Developer jobs in City
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Manchester PHP Developer jobs">PHP Developer jobs in Manchester
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Leeds PHP Developer jobs">PHP Developer jobs in Leeds
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Bristol PHP Developer jobs">PHP Developer jobs in Bristol
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Edinburgh PHP Developer jobs">PHP Developer jobs in Edinburgh
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Bath PHP Developer jobs">PHP Developer jobs in Bath
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Bromley PHP Developer jobs">PHP Developer jobs in Bromley
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Cambridge PHP Developer jobs">PHP Developer jobs in Cambridge
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Central London PHP Developer jobs">PHP Developer jobs in Central London
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for West End PHP Developer jobs">PHP Developer jobs in West End
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Birmingham PHP Developer jobs">PHP Developer jobs in Birmingham
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Macclesfield PHP Developer jobs">PHP Developer jobs in Macclesfield
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Northampton PHP Developer jobs">PHP Developer jobs in Northampton
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Nottingham PHP Developer jobs">PHP Developer jobs in Nottingham
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Sheffield PHP Developer jobs">PHP Developer jobs in Sheffield
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Stockport PHP Developer jobs">PHP Developer jobs in Stockport
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for York PHP Developer jobs">PHP Developer jobs in York
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Ascot PHP Developer jobs">PHP Developer jobs in Ascot
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Brighton PHP Developer jobs">PHP Developer jobs in Brighton
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Cardiff PHP Developer jobs">PHP Developer jobs in Cardiff
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Fareham PHP Developer jobs">PHP Developer jobs in Fareham
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Halesowen PHP Developer jobs">PHP Developer jobs in Halesowen
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for High Wycombe PHP Developer jobs">PHP Developer jobs in High Wycombe
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Hull PHP Developer jobs">PHP Developer jobs in Hull
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Ilford PHP Developer jobs">PHP Developer jobs in Ilford
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Leamington Spa PHP Developer jobs">PHP Developer jobs in Leamington Spa
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Middlesbrough PHP Developer jobs">PHP Developer jobs in Middlesbrough
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Norwich PHP Developer jobs">PHP Developer jobs in Norwich
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Reading PHP Developer jobs">PHP Developer jobs in Reading
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Solihull PHP Developer jobs">PHP Developer jobs in Solihull
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for South West London PHP Developer jobs">PHP Developer jobs in South West London
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Stafford PHP Developer jobs">PHP Developer jobs in Stafford
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Stoke-On-Trent PHP Developer jobs">PHP Developer jobs in Stoke-On-Trent
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Sutton Coldfield PHP Developer jobs">PHP Developer jobs in Sutton Coldfield
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Wakefield PHP Developer jobs">PHP Developer jobs in Wakefield
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for West London PHP Developer jobs">PHP Developer jobs in West London
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Abingdon PHP Developer jobs">PHP Developer jobs in Abingdon
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Addlestone PHP Developer jobs">PHP Developer jobs in Addlestone
                      </a>
                    </li>
                    <li class="col-xs-12 col-md-6">
                      <a href="#" title="See results for Altrincham PHP Developer jobs">PHP Developer jobs in Altrincham
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="hidden-xs col-sm-2 text-right">
                  <a class="locations-drilldown-desktop-toggle drilldown-toggle hide">See more
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php
	$this->load->view("common/footer");
	?>
</html>
