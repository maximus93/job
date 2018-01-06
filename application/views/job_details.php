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
                                        
                                        <a href="#" class="btn btn-primary" style="text-align:center;margin-top:30px;margin-bottom:10px;">Apply For This Job</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel-body" style="border:1px solid #e1e1e1;">
                                        <div class="job_title block1" style="font-weight:900;">
                                            Company Profile
                                            <a href="#" style="color:#1c4972;float:left;margin-left:-10px;" class="col-md-12"><?php echo (($fetch_job->name_status == 'yes')?'Company Name Hidden':$fetch_job->company_name);?>
                                        </div> 
										 <div class="clearfix"></div>
											<!--<div  style="margin-top:20px;margin-bottom:20px;">
											<a href="https://www.facebook.com/" target="blank" class="user-media"><img src="<?php echo base_url();?>images/facebook_logos_PNG19748.png" style="height:40px;width:40px;"></a>
                                            <a href="https://twitter.com" target="blank" class="user-media twitter"><img src="<?php echo base_url();?>images/unnamed.png" style="height:42px;width:42px;"></a>
                                            <a href="http://www.linkedin.com/" target="blank" class="user-media linke"><img src="<?php echo base_url();?>images/official-linkedin-logo-tile.png" style="height:42px;width:42px;"></a>
                                            <a href="https://mail.google.com/" target="blank" class="user-media google"><img src="<?php echo base_url();?>images/google-g-logo-2012.png" style="height:42px;width:42px;"></a>

											</div>-->
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

                                                <span style="color:black;padding-bottom:10px;font-size:12px;">
                                                    <span class="glyphicon glyphicon-education"></span> 
                                                     <?php echo ucfirst($fetch_job->type);?>
                                                </span></br>

                                            </div>
                                    </div>
                                    <div class="panel-body" style="border:1px solid #e1e1e1;margin-top:20px;">
                                        <div class="job_title block1">
                                            Send a Query
                                        </div> 
                                        <p></p>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Name" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email Address" />
                                        </div>
                                        <div class="form-group">
                                            <textarea  type="text" class="form-control" placeholder="Message"></textarea>
                                        </div>
                                        <button class="btn btn-primary btn-block">Submit Message</button>
                                    </div>
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
                                        <h2 style="color:black;">Similar Jobs</h2>
                                    </div>
                                    <div class="table-bg" style="border:1px solid #e1e1e1;border-top:0px;">
                                        <table class="table" style="margin-bottom:0px;">
                                            <tbody>
                                                <?php
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
</html>
