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
        background:url('<?php echo base_url();?>images/SB-O-WritingJobDescriptions-Hero-1.jpg') no-repeat left top/cover;
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

    <div class="container results-container">
      <p style="margin-bottom:20px;"> 
      </p>
      <div class="row job-results-row" style="margin-bottom:40px;">
	  <div class="col-sm-12">
	         <?php
              if($this->session->flashdata('success')){
            ?>
              <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
            <?php
              }
              if($this->session->flashdata('failed')){
            ?>
              <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
            <?php
              }
            ?>
			</div>
        <div class="col-sm-12 reset-to-row equal-height">
          <?php
$this->load->view("common/another_sidebar");

?> 
          <div class="col-sm-9 job-results clearfix" style="background:none;border:1px;">
            <div class="row">
              <div class="col-xs-12 job-results clearfix" style="background:none;">
                <div class="clearfix">
                </div>
                <div class="page_listing candidate" style="border:1px  solid #e1e1e1;
                                                           border-bottom:  1px solid #e1e1e1;background:#e1e1e1;">
                  <div class="sorting_content col-md-6" style=" padding: 25px 15px 15px;
                                                               overflow: hidden;">
                    <div class="tab-image" style="float: left;text-align: center;margin-right: 20px;">
                      <img src="<?php echo base_url();?>uploads/<?php echo $get_applicant_fetch->profile_picture;?>" alt="" class="img-responsive" style="height:60px;width:60px;">
                    </div>
                    <div class="overflow" style="overflow:hidden;">
                      <div class="text-shorting" style="font-size: 16px;color: #333;
                                                        line-height: 30px;
                                                        font-weight: 500;
                                                        margin: 0px;">
                        <h1 style="    font-size: 16px;
                                   color: #237fa5;
                                   line-height: 35px;
                                   font-weight: 700;
                                   margin-top:-1px;">
                          <?php echo ucfirst($get_applicant_fetch->first_name);?> <?php echo ucfirst($get_applicant_fetch->last_name);?>
                       
                        </h1>
                        <ul class="unstyled" style="margin-top:-15px;padding: 0px;">
                          <li style="display: inline-block;
                                     padding: 0 50px 0 0;
                                     color: #7d7d7d;
                                     font-size: 13px;line-height:15px;"> <?php echo $get_applicant_fetch->address;?>
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
                    
                      <div class="contact_details col-md-8 col-sm-8 p-l">
                        <span class="col-md-8">
						<strong  style="float:left;margin-left:-30px;font-size: 12px; padding-bottom:5px;" class="col-md-12"><b style="font-size:13px;">TYPE</b>:&nbsp;<span style="color:#237fa5"><?php echo ucfirst($get_applicant_fetch->user_type);?></span>
                          </strong>
                          <strong  style="float:left;margin-left:-30px;font-size: 12px; padding-bottom:5px;" class="col-md-12"><b style="font-size:13px;">STATUS</b>:&nbsp;<span style="color:#237fa5"><?php echo ucfirst($get_applicant_fetch->user_status);?></span>
                          </strong>
                          <strong  style="float:left;margin-left:-30px;font-size: 12px; padding-bottom:5px;" class="col-md-12"><b style="font-size:13px;">JOINING</b>:&nbsp;<span style="color:#237fa5"><?php echo date('d/m/Y',$get_applicant_fetch->registration_date);?></span>
                          </strong>
                          
                        </span>
                        <span class="col-md-4">
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="sorting_content col-md-6" style="padding: 25px 15px 15px;
                                                               overflow: hidden;">
                    <div class="col-md-6 ">
                      <strong style="font-size: 12px;" class="col-md-12">Resume Updated
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Experience
                      </strong>
                      
                      <strong style="font-size: 12px;" class="col-md-12">Desired Salary
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Will To Travel
                      </strong>
					  <strong style="font-size: 12px;" class="col-md-12">Relocation
                      </strong>
                      <strong style="font-size: 12px;" class="col-md-12">Education
                      </strong>
					  
					  
                    </div>
                    <div class="col-md-6">
                      <strong style="font-size: 12px;color:#237fa5" class="col-md-12">
						<?php
						$date = time();
						$resume_upload_time = $get_applicant_fetch->registration_date;
						$remain = $date - $resume_upload_time;
						echo date('m',$remain);
						?> month's ago
                      </strong>
                      <strong style="font-size: 12px;color:#237fa5" class="col-md-12">
						<?php
						if($get_applicant_fetch->start_date =='' && $get_applicant_fetch->end_date =='')
							{
							?>
							Not Provided Yet
							<?php
							}
							else{
								$start_date = $get_applicant_fetch->start_date;
								$end_date = $get_applicant_fetch->end_date;
								$experience = $start_date - $end_date;
							?>
								<?php echo date('Y',$experience);?>years
							<?php
							}
						?>
					 
                      </strong>
                    
                      <strong style="font-size: 12px;color:#237fa5" class="col-md-12"><?php
						if($get_applicant_fetch->max_salary == '')
						{
						?>
						Not Provided Yet
						<?php
						}
						else
						{
					  ?>
							<?php echo $get_applicant_fetch->max_salary;?>years
					  <?php
						}
					  ?>
                      </strong>
                      <strong style="font-size: 12px;color:#237fa5" class="col-md-12"><?php
						if($get_applicant_fetch->travel_distance == '')
						{
					  ?>
						Not Provided Yet
					  <?php
						}
					  else
						{
					  ?>
						<?php echo $get_applicant_fetch->travel_distance;?> km
					  <?php
						}
					  ?>
                      </strong>
                      <strong style="font-size: 12px;color:#237fa5" class="col-md-12">
					  <?php
						if($get_applicant_fetch->relocate	 == '')
						{
					  ?>
						Not Provided Yet
					  <?php
						}
					  else
						{
					  ?>
					  <?php echo $get_applicant_fetch->relocate;?>
					  <?php
						}
					  ?>
                      </strong>
					  <strong style="font-size: 12px;color:#237fa5;" class="col-md-12">  
					  <?php
						if($get_applicant_fetch->education == '')
						{
					  ?>
						&nbsp;Not Provided Yet
					  <?php
						}
					  else
						{
					  ?>
					  <?php echo $get_applicant_fetch->education;?>
					  <?php
						}
					  ?>
                      </strong>

					 
					 
                    </div>
                  </div>
                 
                </div>
                <div class="">
                  <ul class="nav nav-tabs" style="border:1px solid #1c4972;background:#1c4972;">
                    <li class="active">
                      <a href="#home" style="border:none;">Resume Upload
                      </a>
                    </li>
                    <li>
                      <a href="#menu1" style="border:none;">Candidate Details
                      </a>
                    </li>
                    <li>
                      <a href="#menu2" style="border:none;">Additional Info
                      </a>
                    </li>
                    <!-- <li><a href="#menu3">Menu 3</a></li> -->
                  </ul>
                  <div class="tab-content" style="padding-bottom:15px;">
                    <div id="home" class="tab-pane fade in active">
                      <div class="col-md-6">
                        <p style="font-size:13px;">
                          <strong>Resume Upload
                          </strong>
                        </p>
                        <p style="font-size:13px;">
                          <strong>Resume Download
                          </strong>
                        </p>
                      </div>
                      <div class="col-md-6">
                        <p style="font-size:13px;">
                          <strong><?php 
						  $posted_date = $get_applicant_fetch->date_posted;
							$now = time();
							$remain_date = $now - $posted_date;
							echo date('d',$remain_date);

						?> Months Ago
                          </strong>
                        </p>
                        <p>
                          <a href="<?php echo base_url();?>uploads/<?php echo $get_applicant_fetch->resume_file;?>"><div class="btn btn-primary btn-xs" >Download
                          </div></a>
                        </p>
                      </div>
                      <hr>
              
                </div>
                <div id="menu1" class="tab-pane fade">
                  <p>
                    <strong><img src="<?php echo base_url();?>uploads/<?php echo $get_applicant_fetch->profile_picture;?>" style="height:40px;width:40px;">&nbsp;&nbsp;<?php echo $get_applicant_fetch->first_name;?> <?php echo $get_applicant_fetch->last_name;?>
                    </strong>
                  </p>
                  <div class="col-md-12" style="border:1px solid #e1e1e1;padding-top:20px;padding-left:30px;margin-top:20px;">
                    <!-- <p><strong style="font-size:15px;">CANDIDATE NAME</strong></p> -->
                    <p style="font-size:13px;margin-top:-5px;"><?php echo $get_applicant_fetch->job_title;?> 
                    </strong>
                  </p>
				  <p style="font-size:13px;margin-top:-5px;"><?php echo $get_applicant_fetch->email;?> 
                </p>
				<p style="font-size:13px;margin-top:-5px;"><?php echo $get_applicant_fetch->phone;?> 
                </p>
                <p style="font-size:13px;margin-top:-5px;"><?php echo $get_applicant_fetch->address;?> 
                </p>
				<p style="font-size:13px;margin-top:-5px;"><?php echo $get_applicant_fetch->postcode;?> 
                </p>
                
                
                <br>
              </div>
            </div>
            <div id="menu2" class="tab-pane fade">
              <div class="col-md-12" style="border:1px solid #e1e1e1;">
                <div class="col-md-6" style="padding-top:10px;">
                  <p style="font-size:13px;">
                    <strong>First Name:-
                    </strong>
                  </p>
                  <p style="font-size:13px;">
                    <strong>Last Name:-
                    </strong>
                  </p>
				  <p style="font-size:13px;">
                    <strong>Type:-
                    </strong>
                  </p>
                  <p style="font-size:13px;">
                    <strong>Skills:-
                    </strong>
                  </p>
                  <p style="font-size:13px;">
                    <strong>Experience:-
                    </strong>
                  </p>
				  <p style="font-size:13px;">
                    <strong>Salary:-
                    </strong>
                  </p>
                  <p style="font-size:13px;">
                    <strong>Education:-
                    </strong>
                  </p>
                  <p style="font-size:13px;">
                    <strong>Member Since:-
                    </strong>
                  </p>
                 
                </div>
                <div class="col-md-6" style="text-align:center;padding-top:10px;" >
                  <p style="font-size:13px;"><?php echo $get_applicant_fetch->first_name;?>
                  </p>
                  <p style="font-size:13px;"><?php echo $get_applicant_fetch->last_name;?>
                  </p>
                  <p style="font-size:13px;"><?php echo $get_applicant_fetch->job_title;?>
                  </p>
                  <p style="font-size:13px;"><?php echo $get_applicant_fetch->skills;?>
                  </p>
                  <p style="font-size:13px;"><?php
					$start_date = $get_applicant_fetch->start_date;
					$end_date = $get_applicant_fetch->end_date;
					$experience = $start_date-$end_date;
					echo date('m',$experience);
				?> year's
                  </p>
                  <p style="font-size:13px;">&#36;<?php echo $get_applicant_fetch->max_salary;?>
                  </p>
                  <p style="font-size:13px;"><?php echo $get_applicant_fetch->education;?>
                  </p>
				   <p style="font-size:13px;"><?php 
				   echo date('d/m/Y',$get_applicant_fetch->registration_date);
					
				?>
                  </p>
                </div>
              </div>
            </div>
            <!-- <div id="menu3" class="tab-pane fade">
<h3>Menu 3</h3>
<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
</div> -->
          </div>
          <hr>
          <!-- <p class="act col-md-12"><b>Active Tab</b>: <span></span></p>
<p class="prev"><b>Previous Tab</b>: <span></span></p> -->
        </div>
        <!-- 
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
</div> -->

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="sendJobModal" aria-hidden="true" ">
          <div class="modal-dialog modal-sm">
		  <div class="modal-content" style="width:100% !important;">
      
      <div class="modal-body">
           <form method="POST" action="<?php echo base_url();?>dashboard/edit_resume_file" enctype="multipart/form-data" class="job-add-form">
                   <div class="form-group" style="margin-top:5px;">
					<label for="location" style="font-size:12px;">Update Resume
					</label>
					
					<input type="file" name="resume_file" class="form-control" required>
				  </div>
				   <div class="form-group" style="margin-top:5px;">
					<input type="submit" class="btn btn-default" name="submit" value="Update">
				   </div>
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
<script>
  $(document).ready(function(){
    $(".nav-tabs a").click(function(){
      $(this).tab('show');
    }
                          );
    $('.nav-tabs a').on('shown.bs.tab', function(event){
      var x = $(event.target).text();
      // active tab
      var y = $(event.relatedTarget).text();
      // previous tab
      $(".act span").text(x);
      $(".prev span").text(y);
    }
                       );
  }
                   );
</script>
</html>
