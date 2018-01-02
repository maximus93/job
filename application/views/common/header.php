<?php
$page_name = BASENAME($_SERVER['PHP_SELF']); 
?>
<style>
.reg_etxt:hover{
	color:#003A83;
	font-weight:800;
}
.abc{
background:white;
}
</style>
<header class="master-row header-row" style="background:white;height:100px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-9">
                <div class="logo">
                    <a title="#" href="index.php"><img src="<?php echo base_url();?>images/logo-light.png" style="height:60px;"></a>
                </div>
            </div>
            <div class="col-xs-3" id="top-recruiter-links" style="margin-top:30px;float:right;">
					<a  href="<?php echo base_url();?>register" style="color:black;padding:5px 10px;text-transform:capitalize  !important;border:1px solid black;float:right;border-radius: 7px !important;">REGISTER</a>
					<a  href="<?php echo base_url();?>login"style="color:black;padding:5px 10px;text-transform:capitalize  !important;float:right;"><img src="<?php echo base_url();?>images/if_102_111044.png" style="height:18px;"> LOGIN </a>
					
			</div>
		</div>
    </div>
</header>
<div class="master-row navigation" style="">
    <div id="navbar-mobile-recent-search-container" class="visible-xs col-xs-12">
        <div id="navbar-mobile-location-recent-search-container" class="recent-search">
        </div>
        <div id="navbar-mobile-keywords-recent-search-container" class="recent-search">
        </div>
    </div>
    <nav class="navbar navbar-default" >
        <div class="container">
            
            <div class="row">
                <div class="col-xs-12">
                    <div class="reset-to-row">
                        <div class="navbar-header" id="navbar-header">
    <button id="navbar-personalisation-toggle" type="button"
            data-target="#navbar-personalisation-links" data-toggle="collapse"
            data-tracking-toggle-open-event-description="Header_loggedin_open"
            data-tracking-toggle-close-event-description="Header_loggedin_closed"
            data-tracking-event-variables='{"eVar23":"$current_page"}'
            class="navbar-toggle navbar-always-on collapsed pull-right navbar-item signedin-icon auth toggle-tracking">
        <span class="navbar-item-text"> </span>
    </button>

    
    <a href="<?php echo base_url();?>job_post" style="float:right;margin-top:15px;" class="btn-warning">
        <span class="navbar-item-text-no-icon register-text" style="background:#ff9900;padding:10px 20px;border-radius: 7px !important;">POST A JOB</span>
    </a>

    <span id="navbar-register-separator" class="navbar-toggle navbar-always-on collapsed pull-right navbar-item navbar-item-anchor hidden-xs hidden-sm navbar-separator"></span>

    <button id="navbar-site-toggle" type="button"
            data-target="#navbar-site-links" data-toggle="collapse"
            data-tracking-toggle-open-event-description="Header_menu_open"
            data-tracking-toggle-close-event-description="Header_menu_closed"
            data-tracking-event-variables='{"eVar23":"$current_page"}'
            class="navbar-toggle navbar-always-on collapsed toggle-tracking visible-xs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
    </button>


<div id="navbar-desktop-site-links" class="hidden-xs">
    <ul>
	    <li class="<?php echo(($page_name == 'index.php')?'abc':'');?>">
            <a class="navbar-item-anchor" href="<?php echo base_url();?>" style="<?php echo(($page_name == 'index.php')?'color:black':'');?>"><h1 class="h1-for-nav">HOME</h1></a>
        </li>
        <li class="<?php echo(($page_name == 'job_listing.php')?'abc':'');?>">
            <a class="navbar-item-anchor" href="<?php echo base_url();?>joblisting" style="<?php echo(($page_name == 'job_listing.php')?'color:black':'');?>"><h1 class="h1-for-nav">JOBS SEARCH</h1></a>
        </li>
        <li class="<?php echo(($page_name == 'post_resume.php' || $page_name == 'post_register.php')?'abc':'');?>">
            <a href="<?php echo base_url();?>post_register" style="<?php echo(($page_name == 'post_resume.php' || $page_name == 'post_register.php')?'color:black':'');?>">POST RESUME</a>
        </li>
        <li class="<?php echo(($page_name == 'job_post.php')?'abc':'');?>">
            <a class="navbar-item-anchor" style="<?php echo(($page_name == 'job_post')?'color:black':'');?>" href="<?php echo base_url();?>job_post">POST A JOB</a>
        </li>
		<li class="<?php echo(($page_name == 'resume_browse.php')?'abc':'');?>">
            <a class="navbar-item-anchor" style="<?php echo(($page_name == 'resume_browse')?'color:black':'');?>" href="<?php echo base_url();?>resume_browse">RESUME BROWSE</a>
        </li>
    </ul>
</div>
    <a class="navbar-brand" href="/">
        <div class="mobile-logo"></div>
    </a>
</div>

<div class="collapse navbar-collapse always-collapse tj-collapse-menu personalisation-collapse-menu" id="navbar-personalisation-links">
    <ul class="nav navbar-nav">
        <li><a href="#">My account</a></li>
        <li><a href="#">My profile</a></li>
        <li><a href="#">My applications</a></li>
        <li><a href="#">My CV</a></li>
        <li><a href="#">My saved jobs</a><span class="jb-status badge saved-jobs-menu-pill"></span></li>
        <li><a href="#">My job alerts</a></li>
        <li class="signout"><a id="sign-out-link" href="#" class="signout-link">Sign out</a></li>
    </ul>
</div>
                        
<div class="visible-xs">
    <div class="collapse navbar-collapse always-collapse tj-collapse-menu signin-collapse-menu" id="navbar-mobile-signin-links">
        <ul class="nav navbar-nav">
    <li><a href="#" class="signin-link">EMPLOYEE</a></li>
    <li class="hidden-md hidden-lg"><a href="#">Register CV</a></li>
    <li class="recruiter-nav"><a href="#">EMPLOYER</a></li>
</ul>
    </div>
</div>

                        
<div class="collapse navbar-collapse always-collapse tj-collapse-menu sitelinks-collapse-menu" id="navbar-site-links">
    <ul class="nav navbar-nav">
        <li class="recruiter-nav"><a href="#">Job Search</a></li>
        <li><a href="#">Post Resume</a></li>
        <li><a href="#">Post a Job</a></li>
        <li><a href="#">Resume Browse</a></li>
        <!-- <li class="career-nav"><a href="#">Career tools</a></li> -->
    </ul>
</div>
                        
                    </div>
                </div>
            </div>
        </div>
    </nav>

</div>