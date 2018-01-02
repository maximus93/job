<!DOCTYPE html>
<html lang="en">
  <head prefix="og: http://ogp.me/ns#">
    <title>Job Listing | Home 
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <?php
$this->load->view("common/meta_links");
?> 
    <style>
      .job_title{
        color: #333;
        font-size: 20px;
        line-height: 33px;
        font-weight: 500;
      }
      .job_search{
        padding-top: 0px;
        padding-bottom: 25px;
      }
      .borderfull-width {
        border: solid 1px #e1e1e1;
        position: relative;
        overflow: hidden;
        top: 15px;
        margin-bottom: 35px;
      }
      .page-heading {
        padding-bottom: 20px;
      }
      overflow: hidden;
      .page-heading {
        padding-bottom: 20px;
        overflow: hidden;
      }
      .category{
        overflow:hidden;
      }
      .col-md-11 {
        width: 91.66666667%;
      }
      .col-md-1 {
        width:  8.33333333%;
      }
      .p-r {
        padding-right: 0px !important;
      }
      .p-l {
        padding-left: 0px !important;
      }
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
        background:url('<?php echo base_url();?>images/employer-banner.jpg');
        border-bottom: solid 1px #f2f2f2;
        padding: 55px 0px;
        width: 100%;
      }
      .page_listing {
        border: solid 1px #e1e1e1;
        overflow: hidden;
        border-bottom: 0px;
        .candidate .sorting_content:hover {
          border: solid 1px #017583;
        }
        .sorting_content {
          padding: 25px 15px 15px;
          overflow: hidden;
        }
        .candidate .sorting_content {
          border: solid 1px transparent;
          border-bottom: solid 1px #e1e1e1;
        }
        .text-shorting h1 {
        }
        .overflow {
        }
        ul.unstyled {
        }
        .contact_details span {
          display: block;
          padding-bottom: 8px;
          font-size: 13px;
          color: #7d7d7d;
        }
        .filter p, .bottom_text p {
          padding-top: 3px;
          color: #7d7d7d;
          font-size: 13px;
        }
        .p-l {
        }
        .bottom_text {
          overflow: hidden;
        }
    </style>
    <style>
      .sidebar-text{
        font-size: 13px;
        color: #333;
        font-weight: 500;
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
    <div class="simple_bannenr" style="margin-bottom:20px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="work-timee" style="font-size:18px;margin-bottom:5px;">Full Time
            </div>
            <div class="banner-heading" style="font-size:25px;font-weight:300;color:#fff;">Browse Candidates
            </div>    
          </div>  
        </div>
      </div>
    </div>
    <div class="container results-container">
      <p style="margin-bottom:20px;"> 
      </p>
      <div class="row job-results-row" style="margin-bottom:40px;">
        <div class="col-sm-12 reset-to-row equal-height">
	
		<?php
			$this->load->view("common/another_sidebar");
		?>
		
          <div class="col-sm-9 job-results clearfix" style="background:none;">
            <div class="row">
              <div class="col-xs-12 job-results clearfix" style="background:none;">
                <div class="col-md-7 col-sm-7 p-l">
                  <div class="page-heading">
                    <p>Showing 1-8 of 254
                    </p>
                  </div>
                </div>  
                <div class="col-md-5 col-sm-5 filter p-r text-right">
                  <div class="col-md-7 col-sm-5">
                    <p>Short by:
                    </p>
                  </div>
                  <div class="col-md-5 col-sm-7 p-r">
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">By Default 
                        <span class="caret">
                        </span>
                      </button>
                      <ul class="dropdown-menu pull-right">
                        <li>
                          <a href="#" style="color:black;">Executive
                          </a>
                        </li>
                        <li>
                          <a href="#" style="color:black;">SEO
                          </a>
                        </li>
                        <li>
                          <a href="#" style="color:black;">Java Developer
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="clearfix">
                </div>
                <div class="page_listing candidate" style="border:1px  solid #e1e1e1;
                                                           border-bottom:  1px solid #e1e1e1;">
                  <div class="sorting_content col-md-7" style=" padding: 25px 15px 15px;
                                                               overflow: hidden;">
                    <div class="tab-image" style="    float: left;
                                                  text-align: center;
                                                  margin-right: 20px;">
                      <img src="<?php echo base_url();?>images/candidate-6.png" alt="" class="img-responsive">
                    </div>
                    <div class="overflow" style="overflow:hidden;">
                      <div class="text-shorting" style="    font-size: 16px;
                                                        color: #333;
                                                        line-height: 30px;
                                                        font-weight: 500;
                                                        margin: 0px;">
                        <a href="<?php echo base_url();?>candidate_details/">
                          <h1 style="    font-size: 16px;
                                     color: #237fa5;
                                     line-height: 35px;
                                     font-weight: 700;
                                     margin-top:-10px;">
                            <u>Homer Simpson
                            </u>
                          </h1>
                        </a>
                        <ul class="unstyled" style="margin-top:-25px;padding: 0px;">
                          <li style="display: inline-block;
                                     padding: 0 50px 0 0;
                                     color: #7d7d7d;
                                     font-size: 13px;"> Toulouse, France | Vocational
                          </li>
                        </ul>
                        <p>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <p>
                      </p>
                      <!-- <p class="col-md-12 p-l" style="    padding-top: 3px;
color: #7d7d7d;
font-size: 13px;
}">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p> -->
                      <div class="contact_details col-md-12 col-sm-8 p-l" style="display: block;
                                                                                 padding-bottom: 8px;
                                                                                 font-size: 13px;
                                                                                 color: #7d7d7d;margin-top:10px;float:left;margin-left:-10px;margin-top:-7px;">
                        <li>
                          <strong style="color: #237fa5;">Accounting Manager
                          </strong>
                        </li>
                      </div>
                      <div class="contact_details col-md-8 col-sm-8 p-l">
                        <span class="col-md-8">
                          <strong  style="float:left;margin-left:-15px;font-size: 13px; padding-bottom:10px;" class="col-md-12">Top Skills
                          </strong>
                          <p style="float:left;margin-left:-13px;font-size: 11px;margin-top:-5px;" class="col-md-12">People Management
                          </p>
                          <p style="float:left;margin-left:-13px;font-size: 11px;margin-top:-5px;" class="col-md-12">Payroll Software Services
                          </p>
                          <p style="float:left;margin-left:-13px;font-size: 11px;margin-top:-5px;" class="col-md-12">Time Management
                          </p>
                        </span>
                        <span class="col-md-4">
                          <strong style="padding-bottom:10px;float:left;margin-left:-15px;font-size: 13px;" class="col-md-12">Experience
                          </strong>
                          <p style="float:left;margin-left:-5px;font-size: 11px;margin-top:-5px;">40.0 Years
                          </p>
                          <p style="float:left;margin-left:-5px;font-size: 11px;margin-top:-5px;">40.0 Years
                          </p>
                          <p style="float:left;margin-left:-5px;font-size: 11px;margin-top:-5px;">37.8 Years
                          </p>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="sorting_content col-md-5" style="padding: 25px 15px 15px;
                                                               overflow: hidden;">
                    <div class="col-md-6 ">
                      <strong style="font-size: 12px;" class="col-md-12">Resume Updated
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Experience
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Authorization
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Desired Salary
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Relocaion
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Board
                      </strong>
                    </div>
                    <div class="col-md-6">
                      <strong style="font-size: 12px;" class="col-md-12">26 months ago
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">40.0 years
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">US Authorised 
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">-
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">-
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">-
                      </strong>
                    </div>
                  </div>
                </div>
                <div class="page_listing candidate" style="border:1px  solid #e1e1e1;
                                                           border-bottom:  1px solid #e1e1e1;">
                  <div class="sorting_content col-md-7" style=" padding: 25px 15px 15px;
                                                               overflow: hidden;">
                    <div class="tab-image" style="    float: left;
                                                  text-align: center;
                                                  margin-right: 20px;">
                      <img src="<?php echo base_url();?>images/candidate-2.png" alt="" class="img-responsive">
                    </div>
                    <div class="overflow" style="overflow:hidden;">
                      <div class="text-shorting" style="    font-size: 16px;
                                                        color: #333;
                                                        line-height: 30px;
                                                        font-weight: 500;
                                                        margin: 0px;">
                        <a href="<?php echo base_url();?>candidate_details/">
                          <h1 style="    font-size: 16px;
                                     color: #237fa5;
                                     line-height: 35px;
                                     font-weight: 700;
                                     margin-top:-10px;">
                            <u>Homer Simpson
                            </u>
                          </h1>
                        </a>
                        <ul class="unstyled" style="margin-top:-25px;padding: 0px;">
                          <li style="display: inline-block;
                                     padding: 0 50px 0 0;
                                     color: #7d7d7d;
                                     font-size: 13px;"> Toulouse, France | Vocational
                          </li>
                        </ul>
                        <p>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <p>
                      </p>
                      <!-- <p class="col-md-12 p-l" style="    padding-top: 3px;
color: #7d7d7d;
font-size: 13px;
}">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p> -->
                      <div class="contact_details col-md-12 col-sm-8 p-l" style="display: block;
                                                                                 padding-bottom: 8px;
                                                                                 font-size: 13px;
                                                                                 color: #7d7d7d;margin-top:10px;float:left;margin-left:-10px;margin-top:-7px;">
                        <li>
                          <strong style="color: #237fa5;">Accounting Manager
                          </strong>
                        </li>
                      </div>
                      <div class="contact_details col-md-8 col-sm-8 p-l">
                        <span class="col-md-8">
                          <strong  style="float:left;margin-left:-15px;font-size: 13px; padding-bottom:10px;" class="col-md-12">Top Skills
                          </strong>
                          <p style="float:left;margin-left:-13px;font-size: 11px;margin-top:-5px;" class="col-md-12">People Management
                          </p>
                          <p style="float:left;margin-left:-13px;font-size: 11px;margin-top:-5px;" class="col-md-12">Payroll Software Services
                          </p>
                          <p style="float:left;margin-left:-13px;font-size: 11px;margin-top:-5px;" class="col-md-12">Time Management
                          </p>
                        </span>
                        <span class="col-md-4">
                          <strong style="padding-bottom:10px;float:left;margin-left:-15px;font-size: 13px;" class="col-md-12">Experience
                          </strong>
                          <p style="float:left;margin-left:-5px;font-size: 11px;margin-top:-5px;">40.0 Years
                          </p>
                          <p style="float:left;margin-left:-5px;font-size: 11px;margin-top:-5px;">40.0 Years
                          </p>
                          <p style="float:left;margin-left:-5px;font-size: 11px;margin-top:-5px;">37.8 Years
                          </p>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="sorting_content col-md-5" style="padding: 25px 15px 15px;
                                                               overflow: hidden;">
                    <div class="col-md-6 ">
                      <strong style="font-size: 12px;" class="col-md-12">Resume Updated
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Experience
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Authorization
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Desired Salary
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Relocaion
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Board
                      </strong>
                    </div>
                    <div class="col-md-6">
                      <strong style="font-size: 12px;" class="col-md-12">26 months ago
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">40.0 years
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">US Authorised 
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">-
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">-
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">-
                      </strong>
                    </div>
                  </div>
                </div>
                <div class="page_listing candidate" style="border:1px  solid #e1e1e1;
                                                           border-bottom:  1px solid #e1e1e1;">
                  <div class="sorting_content col-md-7" style=" padding: 25px 15px 15px;
                                                               overflow: hidden;">
                    <div class="tab-image" style="    float: left;
                                                  text-align: center;
                                                  margin-right: 20px;">
                      <img src="<?php echo base_url();?>images/candidate-3.png" alt="" class="img-responsive">
                    </div>
                    <div class="overflow" style="overflow:hidden;">
                      <div class="text-shorting" style="    font-size: 16px;
                                                        color: #333;
                                                        line-height: 30px;
                                                        font-weight: 500;
                                                        margin: 0px;">
                        <a href="<?php echo base_url();?>candidate_details/">
                          <h1 style="    font-size: 16px;
                                     color: #237fa5;
                                     line-height: 35px;
                                     font-weight: 700;
                                     margin-top:-10px;">
                            <u>Homer Simpson
                            </u>
                          </h1>
                        </a>
                        <ul class="unstyled" style="margin-top:-25px;padding: 0px;">
                          <li style="display: inline-block;
                                     padding: 0 50px 0 0;
                                     color: #7d7d7d;
                                     font-size: 13px;"> Toulouse, France | Vocational
                          </li>
                        </ul>
                        <p>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <p>
                      </p>
                      <!-- <p class="col-md-12 p-l" style="    padding-top: 3px;
color: #7d7d7d;
font-size: 13px;
}">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p> -->
                      <div class="contact_details col-md-12 col-sm-8 p-l" style="display: block;
                                                                                 padding-bottom: 8px;
                                                                                 font-size: 13px;
                                                                                 color: #7d7d7d;margin-top:10px;float:left;margin-left:-10px;margin-top:-7px;">
                        <li>
                          <strong style="color: #237fa5;">Accounting Manager
                          </strong>
                        </li>
                      </div>
                      <div class="contact_details col-md-8 col-sm-8 p-l">
                        <span class="col-md-8">
                          <strong  style="float:left;margin-left:-15px;font-size: 13px; padding-bottom:10px;" class="col-md-12">Top Skills
                          </strong>
                          <p style="float:left;margin-left:-13px;font-size: 11px;margin-top:-5px;" class="col-md-12">People Management
                          </p>
                          <p style="float:left;margin-left:-13px;font-size: 11px;margin-top:-5px;" class="col-md-12">Payroll Software Services
                          </p>
                          <p style="float:left;margin-left:-13px;font-size: 11px;margin-top:-5px;" class="col-md-12">Time Management
                          </p>
                        </span>
                        <span class="col-md-4">
                          <strong style="padding-bottom:10px;float:left;margin-left:-15px;font-size: 13px;" class="col-md-12">Experience
                          </strong>
                          <p style="float:left;margin-left:-5px;font-size: 11px;margin-top:-5px;">40.0 Years
                          </p>
                          <p style="float:left;margin-left:-5px;font-size: 11px;margin-top:-5px;">40.0 Years
                          </p>
                          <p style="float:left;margin-left:-5px;font-size: 11px;margin-top:-5px;">37.8 Years
                          </p>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="sorting_content col-md-5" style="padding: 25px 15px 15px;
                                                               overflow: hidden;">
                    <div class="col-md-6 ">
                      <strong style="font-size: 12px;" class="col-md-12">Resume Updated
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Experience
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Authorization
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Desired Salary
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Relocaion
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Board
                      </strong>
                    </div>
                    <div class="col-md-6">
                      <strong style="font-size: 12px;" class="col-md-12">26 months ago
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">40.0 years
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">US Authorised 
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">-
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">-
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">-
                      </strong>
                    </div>
                  </div>
                </div>
                <div class="page_listing candidate" style="border:1px  solid #e1e1e1;
                                                           border-bottom:  1px solid #e1e1e1;">
                  <div class="sorting_content col-md-7" style=" padding: 25px 15px 15px;
                                                               overflow: hidden;">
                    <div class="tab-image" style="    float: left;
                                                  text-align: center;
                                                  margin-right: 20px;">
                      <img src="<?php echo base_url();?>images/candidate-4.png" alt="" class="img-responsive">
                    </div>
                    <div class="overflow" style="overflow:hidden;">
                      <div class="text-shorting" style="    font-size: 16px;
                                                        color: #333;
                                                        line-height: 30px;
                                                        font-weight: 500;
                                                        margin: 0px;">
                        <a href="<?php echo base_url();?>candidate_details/">
                          <h1 style="    font-size: 16px;
                                     color: #237fa5;
                                     line-height: 35px;
                                     font-weight: 700;
                                     margin-top:-10px;">
                            <u>Homer Simpson
                            </u>
                          </h1>
                        </a>
                        <ul class="unstyled" style="margin-top:-25px;padding: 0px;">
                          <li style="display: inline-block;
                                     padding: 0 50px 0 0;
                                     color: #7d7d7d;
                                     font-size: 13px;"> Toulouse, France | Vocational
                          </li>
                        </ul>
                        <p>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <p>
                      </p>
                      <!-- <p class="col-md-12 p-l" style="    padding-top: 3px;
color: #7d7d7d;
font-size: 13px;
}">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p> -->
                      <div class="contact_details col-md-12 col-sm-8 p-l" style="display: block;
                                                                                 padding-bottom: 8px;
                                                                                 font-size: 13px;
                                                                                 color: #7d7d7d;margin-top:10px;float:left;margin-left:-10px;margin-top:-7px;">
                        <li>
                          <strong style="color: #237fa5;">Accounting Manager
                          </strong>
                        </li>
                      </div>
                      <div class="contact_details col-md-8 col-sm-8 p-l">
                        <span class="col-md-8">
                          <strong  style="float:left;margin-left:-15px;font-size: 13px; padding-bottom:10px;" class="col-md-12">Top Skills
                          </strong>
                          <p style="float:left;margin-left:-13px;font-size: 11px;margin-top:-5px;" class="col-md-12">People Management
                          </p>
                          <p style="float:left;margin-left:-13px;font-size: 11px;margin-top:-5px;" class="col-md-12">Payroll Software Services
                          </p>
                          <p style="float:left;margin-left:-13px;font-size: 11px;margin-top:-5px;" class="col-md-12">Time Management
                          </p>
                        </span>
                        <span class="col-md-4">
                          <strong style="padding-bottom:10px;float:left;margin-left:-15px;font-size: 13px;" class="col-md-12">Experience
                          </strong>
                          <p style="float:left;margin-left:-5px;font-size: 11px;margin-top:-5px;">40.0 Years
                          </p>
                          <p style="float:left;margin-left:-5px;font-size: 11px;margin-top:-5px;">40.0 Years
                          </p>
                          <p style="float:left;margin-left:-5px;font-size: 11px;margin-top:-5px;">37.8 Years
                          </p>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="sorting_content col-md-5" style="padding: 25px 15px 15px;
                                                               overflow: hidden;">
                    <div class="col-md-6 ">
                      <strong style="font-size: 12px;" class="col-md-12">Resume Updated
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Experience
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Authorization
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Desired Salary
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Relocaion
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Board
                      </strong>
                    </div>
                    <div class="col-md-6">
                      <strong style="font-size: 12px;" class="col-md-12">26 months ago
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">40.0 years
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">US Authorised 
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">-
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">-
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">-
                      </strong>
                    </div>
                  </div>
                </div>
                <div class="page_listing candidate" style="border:1px  solid #e1e1e1;
                                                           border-bottom:  1px solid #e1e1e1;">
                  <div class="sorting_content col-md-7" style=" padding: 25px 15px 15px;
                                                               overflow: hidden;">
                    <div class="tab-image" style="    float: left;
                                                  text-align: center;
                                                  margin-right: 20px;">
                      <img src="<?php echo base_url();?>images/candidate-5.png" alt="" class="img-responsive">
                    </div>
                    <div class="overflow" style="overflow:hidden;">
                      <div class="text-shorting" style="font-size: 16px;
                                                        color: #333;
                                                        line-height: 30px;
                                                        font-weight: 500;
                                                        margin: 0px;">
                        <a href="<?php echo base_url();?>candidate_details/">
                          <h1 style="    font-size: 16px;
                                     color: #237fa5;
                                     line-height: 35px;
                                     font-weight: 700;
                                     margin-top:-10px;">
                            <u>Homer Simpson
                            </u>
                          </h1>
                        </a>
                        <ul class="unstyled" style="margin-top:-25px;padding: 0px;">
                          <li style="display: inline-block;
                                     padding: 0 50px 0 0;
                                     color: #7d7d7d;
                                     font-size: 13px;"> Toulouse, France | Vocational
                          </li>
                        </ul>
                        <p>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <p>
                      </p>
                      <!-- <p class="col-md-12 p-l" style="    padding-top: 3px;
color: #7d7d7d;
font-size: 13px;
}">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p> -->
                      <div class="contact_details col-md-12 col-sm-8 p-l" style="display: block;
                                                                                 padding-bottom: 8px;
                                                                                 font-size: 13px;
                                                                                 color: #7d7d7d;margin-top:10px;float:left;margin-left:-10px;margin-top:-7px;">
                        <li>
                          <strong style="color: #237fa5;">Accounting Manager
                          </strong>
                        </li>
                      </div>
                      <div class="contact_details col-md-8 col-sm-8 p-l">
                        <span class="col-md-8">
                          <strong  style="float:left;margin-left:-15px;font-size: 13px; padding-bottom:10px;" class="col-md-12">Top Skills
                          </strong>
                          <p style="float:left;margin-left:-13px;font-size: 11px;margin-top:-5px;" class="col-md-12">People Management
                          </p>
                          <p style="float:left;margin-left:-13px;font-size: 11px;margin-top:-5px;" class="col-md-12">Payroll Software Services
                          </p>
                          <p style="float:left;margin-left:-13px;font-size: 11px;margin-top:-5px;" class="col-md-12">Time Management
                          </p>
                        </span>
                        <span class="col-md-4">
                          <strong style="padding-bottom:10px;float:left;margin-left:-15px;font-size: 13px;" class="col-md-12">Experience
                          </strong>
                          <p style="float:left;margin-left:-5px;font-size: 11px;margin-top:-5px;">40.0 Years
                          </p>
                          <p style="float:left;margin-left:-5px;font-size: 11px;margin-top:-5px;">40.0 Years
                          </p>
                          <p style="float:left;margin-left:-5px;font-size: 11px;margin-top:-5px;">37.8 Years
                          </p>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="sorting_content col-md-5" style="padding: 25px 15px 15px;
                                                               overflow: hidden;">
                    <div class="col-md-6 ">
                      <strong style="font-size: 12px;" class="col-md-12">Resume Updated
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Experience
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Authorization
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Desired Salary
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Relocaion
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Board
                      </strong>
                    </div>
                    <div class="col-md-6">
                      <strong style="font-size: 12px;" class="col-md-12">26 months ago
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">40.0 years
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">US Authorised 
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">-
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">-
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">-
                      </strong>
                    </div>
                  </div>
                </div>
                <div class="row" >
                  <div class="col-xs-12">
                    <div class="results-footer-links-container">
                      <nav style="background:#f2f2f2">
                        <ul class="pagination" >
                          <li >
                            <a href="#" aria-label="Previous" rel="nofollow" class="btn btn-default previous  disabled">
                            </a>
                          </li>
                          <li >
                            <span class="active" style="background:#237fa5;border:1px solid #237fa5;color:#fff;margin-left:5px;">1
                            </span>
                          </li>
                          <li>
                            <a href="#" class="page-link" style="background:#fafafa;border:1px solid #237fa5;color:#237fa5;">2
                            </a>
                          </li>
                          <li>
                            <a href="#" class="page-link" style="background:#fafafa;border:1px solid #237fa5;color:#237fa5;">3
                            </a>
                          </li>
                          <li>
                            <a href="#" class="page-link" style="background:#fafafa;border:1px solid #237fa5;color:#237fa5;">4
                            </a>
                          </li>
                          <li>
                            <a href="#" class="page-link" style="background:#fafafa;border:1px solid #237fa5;color:#237fa5;margin-right:5px;">5
                            </a>
                          </li>
                          <li>
                            <a href="#" rel="nofollow" aria-label="Next" class="btn btn-default next ">
                            </a>
                          </li>
                        </ul>
                      </nav>
                      <div id="mobileFilters">
                      </div>
                    </div>
                  </div>
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
      </div>
    </div>
    <?php
$this->load->view("common/footer");
?>
    </html>
