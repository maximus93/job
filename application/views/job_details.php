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
	background-color: #f8f8f8;
    border-top: solid 1px #f2f2f2;
    border-bottom: solid 1px #f2f2f2;
    padding: 20px 0px;
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
			       
    <div class="container results-container">

                
				<main id="maincontent">
                    <section class="resume" style="padding-top:50px !important;">
                        <?php
      if($this->session->flashdata('success')){
    ?>
       <div class="alert alert-success" style="margin-top:10px;text-align:center;"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
    <?php
      }
      if($this->session->flashdata('failed')){
    ?>
       <div class="alert alert-danger" style="margin-top:10px;text-align:center;"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
    <?php
      }
    ?>
                        <div class="container">
                            <div class="row" >
                                <div class="col-md-8">
                                    <div class="panel-body" style="border:1px solid #e1e1e1;">
                                        <div class="col-md-2 p-l">
                                            <div class="block" style="float:left;margin-left:-10px;">
                                                <img src="<?php echo base_url();?>uploads/<?php echo $fetch_job->company_logo;?>" alt="" class="img-responsive" style="margin-top: -7px;height: 112px;">
                                            </div>
                                        </div>
                                        <div class="col-md-10" style="margin-top:8px;">
                                            <div class="job_title" style="font-weight:900;">
                                            <?php echo ucfirst($fetch_job->job_title);?>
                                            <a href="#" class="col-md-12" style="color:#1c4972;padding-top:10px;padding-bottom:10px;float:left;margin-left:-10px;">
                                                <?php 
                                                $resultstr = array();
                                                foreach ($fetch_cat as $cat_details) {
                                                    $resultstr[]  =  $cat_details->category_name;
                                                }
                                                echo implode(" , ",$resultstr);
                                                ?>
                                            </a>
                                            </div> 
                                            <div class="col-md-3 p-l">
                                            <div class="packege" style="float:left;margin-left:-10px;">
                                                <span class="glyphicon glyphicon-education" style=""></span> <?php echo ucfirst($fetch_job->type);?>
                                            </div>
                                            </div>
                                            <div class="col-md-4 p-l" style="margin-left: 30px;">
                                               <div class="packege">
                                                <span class="glyphicon glyphicon-usd" style=""></span>
                                                <?php echo $fetch_job->salary_details;?>
                                            </div> 
                                            </div>
                                            <div class="col-md-3 p-l">
                                                 <div class="packege">
                                                <span class="glyphicon glyphicon-time" style=""></span>
                                                <?php
                                                $post_date = $fetch_job->date;
                                                $now = time();
                                                $ago_date = $now - $post_date;

                                                $yo =  date('d',$ago_date) ;
                                                echo(int)$yo. ' Days ago';
                                                ?>
                                            </div>
                                            </div>
                                           
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="page-heading"></div>
                                        <div class="page-heading">
                                            <h2 style="font-size:16px;font-weight:900;">Job Description</h2>
                                            <?php echo ucfirst($fetch_job->job_description);?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">

                                    <div class="panel-body" style="border:1px solid #e1e1e1;">
                                        <div class="job_title block1" style="font-weight:900;">
                                            Company Profile
                                            <a href="#" style="color:#1c4972;float:left;margin-left:-10px;" class="col-md-12"><?php echo (($fetch_job->name_status == 'yes')?'Company Name Hidden':$fetch_job->company_name);?></a>
                                        </div> 
										 <div class="clearfix"></div>
                                        <div class="contact_details">
                                            <span style="color:black;padding-bottom:10px;font-size:12px;">
                                                <span class="glyphicon glyphicon-map-marker"></span> 
                                                <?php echo ucfirst($fetch_job->location);?>
                                            </span></br>

                                            <span style="color:black;padding-bottom:10px;font-size:12px;">
                                                <span class="glyphicon glyphicon-earphone"></span> 
                                                <?php echo ucfirst($fetch_job->contact_number);?>
                                            </span></br>

                                            <span style="color:black;padding-bottom:10px;font-size:12px;">
                                                <span class="glyphicon glyphicon-user"></span> 
                                                <?php echo ucfirst($fetch_job->contact_name);?>
                                            </span></br>
                                        </div>
                                    </div>
									<?php
										$user_id = $this->session->userdata['logged_in']['user_id'];
										if($user_id != $fetch_job->company_id)
										{
									?>
									<div class="panel-body" style="border:1px solid #e1e1e1;margin-top:20px;">
                                        <a class="btn btn-primary" id="primary_button" onclick="show_box();">Apply For This Job</a>
                                        <div id="apply_form" style="display:none;">
                                            <p></p>
                                            <div class="form-group">
                                                <textarea  type="text" class="form-control" name="message" placeholder="Your Message"></textarea>
                                            </div>
                                            
                                            <a href="<?php echo base_url();?>job_details/delete_job/<?php echo $fetch_job->job_id;?>"><div class="btn btn-primary" type="submit">Apply For This Job</div>
                                        </div>
                                    </div>
									<?php
										}
									else
									{
									?>
									<div class="panel-body" style="border:1px solid #e1e1e1;margin-top:20px;">
                                        <a class="btn btn-primary" id="primary_button" onclick="show_box();" style="background:red;border:1px solid red;margin-left:75px;">Delete This Job</a>
                                        <form id="apply_form" style="display:none;" action="<?php echo base_url();?>job_details/delete_job" method="post" enctype="multipart/form-data">
                                            <p></p>
                                            <div class="form-group">
                                                <textarea  type="text" class="form-control" name="message" placeholder="Reason For Delete This Job"></textarea>
												<input type="hidden" name="job_id" value="<?php echo $fetch_job->job_id;?>">
                                            </div>
                                            <button class="btn btn-primary" type="submit" style="background:red;border:1px solid red;margin-left:75px;">Delete This Job</button>
                                        </form>
                                    </div>
									<?php
									}
									?>
                                </div>
                            </div>
                            <div class="row" style="margin-top:10px;">
                                <div class="col-md-8">
                                    <!-- <p>Share On :</p>
                                    <div class="social_button col-md-4 text-center p-l">
                                        <a href="https://www.facebook.com/" class="btn btn-primary" target="blank"><i class="fa fa-facebook"></i> Login with Faceboook</a>
                                    </div>
                                    <div class="social_button col-md-4  p-l p-r text-center">
                                        <a href="https://twitter.com" class="btn btn-primary" target="blank"><i class="fa fa-twitter"></i> Login with Faceboook</a>
                                    </div>
                                    <div class="social_button col-md-4 text-center p-r">
                                        <a href="https://mail.google.com/" class="btn btn-primary" target="blank"><i class="fa fa-google-plus"></i> Login with Faceboook</a>
                                    </div> -->

                                </div>
                            </div>
							     <div class="clearfix"></div>
                                    <div class="page-heading col-md-12" style="background:#f8f8f8;color:#fff;border:1px solid #f8f8f8;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
									<?php
										$user_id = $this->session->userdata['logged_in']['user_id'];
										if($user_id == $fetch_job->company_id)
										{
									?>
                                       <h2 style="color:black;">Applicant For This Job</h2>
									<?php
										}
										else
										{
									 ?>
									  <h2 style="color:black;">Similar Jobs</h2>
									 <?php
										}
									 ?>
                                    </div>
                                    <div class="table-bg" style="border:1px solid #e1e1e1;border-top:0px;">
                                        <table class="table" style="margin-bottom:0px;">
                                            <tbody>
                                                <?php
												$user_id = $this->session->userdata['logged_in']['user_id'];
												if($user_id == $fetch_job->company_id)
												{
													$get_row = count($get_applicant_details);
													  if($get_row > 1)
														{
														    foreach($get_applicant_details as $fetch_applicant) {
																
                                                        # code...
                                                   
												?>
											    <tr>
                                                    <td class="col-md-6">
														<div class="tab-image col-md-2"><img src="<?php echo base_url();?>uploads/<?php echo $fetch_applicant->profile_picture;?>" style="height:60px;width:60px;" alt="" class="img-responsive"></div>
														<div class="col-md-10"><?php echo ucfirst($fetch_applicant->first_name);?> <?php echo ucfirst($fetch_applicant->last_name);?><p><?php echo $fetch_applicant->email?></p></div>
													</td>
                                                    
                                                    <td class="col-md-2" style="font-size:12px;padding-top:25px;"><a href="<?php echo base_url();?>applicant_dashboard/<?php echo $fetch_applicant->user_id?>" class="table-btn-default" style="font-size:12px;margin-top:10px;color:black;padding-top:10px;padding-bottom:10px;border:1px solid black;padding-right:10px;padding-left:10px;">View Applicant Profile</a></td>
                                                </tr>
											<?php
											 }
												}
												else
													{
											?>
											  <tr>
                                                    <td class="col-md-6" align="center">
                                                        No Application Have Been Submitted!
                                                    </td>
                                                </tr>
											<?php
												}
												}
											else
											{
                                                $get_row = count($similar_job);
                                                if($get_row > 0)
                                                {
                                                    foreach ($similar_job as $fetch_similar) {
                                                        # code...
                                                    }
                                                ?>
                                                <tr>
                                                    <td class="col-md-6">
														<div class="tab-image col-md-2"><img src="<?php echo base_url();?>uploads/<?php echo $fetch_similar->company_logo;?>" alt="" class="img-responsive"></div>
														<div class="col-md-10" style="margin-top: 12px;color:black;"><?php echo ucfirst($fetch_similar->job_title);?><p><?php echo (($fetch_similar->name_status == 'yes')?'Company Name Hidden':$fetch_similar->company_name);?></p></div>
													</td>
                                                    <div class="col-md-2"><td class="work-time" style="font-size:12px;padding-top:34px;text-align:center;"><?php echo $fetch_similar->type;?></td></div>
                                                    <td class="col-md-2" style="font-size:12px;padding-top:34px;"><span class="glyphicon glyphicon-map-marker " ></span> <?php echo ucfirst($fetch_similar->location);?></td>
                                                    <td class="col-md-2" style="font-size:12px;padding-top:34px;"><a href="<?php echo base_url();?>job_details/<?php echo $fetch_similar->job_id;?>" class="table-btn-default" style="font-size:12px;margin-top:10px;color:black;padding-top:10px;padding-bottom:10px;border:1px solid black;padding-right:10px;padding-left:10px;">View Job</a></td>
                                                </tr>
                                                <?php
                                                }
                                                else{
                                                ?>
                                                <tr>
                                                    <td class="col-md-6" align="center">
                                                        No Similar Job found!
                                                    </td>
                                                </tr>
                                                <?php
                                                }
											}
                                                ?>
												
                                            </tbody>
                                        </table>
                                    </div>
                        </div>
                    </section>
                </main>


    </div>
  <?php
		$this->load->view("common/footer");
	?>
    <script>
        function show_box() {
            $("#primary_button").hide();
            $("#apply_form").show();
        }
    </script>>
</html>
