<?php
  /*print_r($search_array['company_name']);
  foreach($search_array As $valuez){
    echo $valuez;
  }*/
?>
<div class="col-sm-3" style="background-color: #f2f2f2;padding: 10px;background-color: #f2f2f2;border: 1px solid #e0e0e0;min-height:450px;">	
      <form name="adv_search" method="POST" action="<?php echo base_url();?>/browse_candidate">
      <div class="job_search" >
        <div class="form-group">
          <input type="text" class="form-control" id="cityz" name="city" value="<?php echo(($this->session->tempdata("city") != '')?$this->session->tempdata("city"):'');?>" placeholder="City / zip code" onchange="this.form.submit()">
          <div class="search_icon">
            <span class="ti-location-pin"></span>
          </div>
          <p> </p>
          
          <select class="form-control" name="comp_name" onchange="this.form.submit()">
            <option selected disabled>Company Name</option>
            <?php
                //print_r($comp_name);
                foreach($comp_name As $fetch_comp){
                  if($fetch_comp->company_name != ""){
            ?>
            <option value="<?php echo $fetch_comp->company_name;?>" <?php echo(($this->session->tempdata("comp_name") == $fetch_comp->company_name)?'selected':'');?>>
            <?php
                    echo $fetch_comp->company_name;
            ?>
            </option>
            <?php
                }else{
                  continue;
                }
              }
            ?>
          </select>
          
          <div class="search_icon">
            <span class="ti-location-pin"></span>
          </div>
        </div>
        <!--<a href="javascript:void(0)" class="btn btn-primary adv_filt" onclick="show_advance_fult();" style="padding-top:10px;padding-bottom:10px;border-radius:0px;text-align:center">Advance Filters</a>-->
      </div>

      <div class="cont_advance">
            <div class="job_title">Skills</div>
            <?php
              //print_r($this->session->tempdata("all_skills"));
              $merge = "";
              foreach($skills_all As $skills_unique){
                $merge .= $skills_unique->skills;
              }
              $convert_merge_to = explode(",",$merge);
            ?>
            <div class="borderfull-width"></div>
            <div class="page-heading">
              <?php
              foreach($convert_merge_to As $key=>$uniqu_skills){
                $search_data_rr = explode(",",$this->session->tempdata("all_skills"));
              ?>
                  <div class="category">
                    <div class="col-md-2 col-sm-2 col-xs-2">
                      <input type="checkbox" value="<?php echo $uniqu_skills;?>" name="skills[]" <?php echo((in_array($uniqu_skills, $search_data_rr))?'checked':'');?> onchange="this.form.submit()"> 
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10 sidebar-text">
                      <?php echo strtoupper($uniqu_skills);?>
                    </div>
                  </div>
              <?php
               }
              ?>
            </div>

            <div class="job_title">Education</div>
            <?php
              //print_r($skills_all);
              $merge = "";
              foreach($edu_all As $edu_unique){
                $merge .= $edu_unique->education;
              }
              $convert_merge_to = explode(",",$merge);
            ?>
            <div class="borderfull-width"></div>
            <div class="page-heading">
              <?php
              foreach($convert_merge_to As $key=>$uniqu_skills){
              ?>
                  <div class="category">
                    <div class="col-md-2 col-sm-2 col-xs-2">
                      <input type="radio" value="<?php echo $uniqu_skills;?>" <?php echo(($this->session->tempdata("edu") == $uniqu_skills)?'checked':'');?> name="edu" onchange="this.form.submit()"> 
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10 sidebar-text">
                      <?php echo strtoupper($uniqu_skills);?>
                    </div>
                  </div>
              <?php
               }
              ?>
            </div>

            <div class="job_title">Experience</div>

            <div class="borderfull-width"></div>
            <div class="page-heading">
                  <?php
                    for($i=0; $i<7; $i++){
                  ?>
                  <div class="category">
                    <div class="col-md-2 col-sm-2 col-xs-2">
                      <input type="radio" value="<?php echo $i;?>" name="exp" onchange="this.form.submit()" <?php echo(($this->session->tempdata("exp") == $i)?'checked':'');?>> 
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10 sidebar-text">
                      <?php echo $i;?>+ yrs
                    </div>
                  </div>
                  <?php
                  }
                  ?>
            </div>

            <div class="job_title">Relocation</div>
            
            <div class="borderfull-width"></div>
            <div class="page-heading">
              
                  <div class="category">
                    <div class="col-md-2 col-sm-2 col-xs-2">
                      <input type="radio" value="yes" name="reloc" onchange="this.form.submit()" <?php echo(($this->session->tempdata("reloc") == "yes")?'checked':'');?>> 
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10 sidebar-text">
                      Yes
                    </div>
                  </div>

                  <div class="category">
                    <div class="col-md-2 col-sm-2 col-xs-2">
                      <input type="radio" value="no" name="reloc" onchange="this.form.submit()" <?php echo(($this->session->tempdata("reloc") == "no")?'checked':'');?>> 
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10 sidebar-text">
                      No 
                    </div>
                  </div>

            </div>

            <div class="job_title">Annual Pay</div>

            <div class="borderfull-width"></div>
            <div class="page-heading">
              
                    <?php
                    $m=10000;
                    for($i=1; $i < 15 ; $i++){
                    ?>
                    <div class="category">
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="radio" value="<?php echo $m*$i;?>" name="ann_pay" onchange="this.form.submit()" <?php echo(($this->session->tempdata("ann_pay") == $m*$i)?'checked':'');?>> 
                      </div>
                      <div class="col-md-10 col-sm-10 col-xs-10 sidebar-text">
                        $ <?php echo $m*$i;?>
                      </div>
                    </div>
                  <?php
                   }
                  ?>
              
            </div>
          </form>
      </div>
</div>

<!-- sidebar -->
		<form name="adv_search" method="POST" action="<?php echo base_url();?>joblisting">
			<div id="facet" class="refine">
			  <div class="facetcollapsible">
				<div class="heading">Refine Search
				</div>
			  </div>
			  <div class="job_search" style="padding:10px;">
				<div class="form-group">
				  <input type="text" class="form-control" name="job_title" value="<?php echo(($this->session->tempdata("job_title") != '')?$this->session->tempdata("job_title"):'');?>" placeholder="Job Title" onchange="this.form.submit()">
				  <div class="search_icon">
					<span class="ti-location-pin"></span>
				  </div>
				  <p> </p>
				  <input type="text" class="form-control" id="cityz" name="city" value="<?php echo(($this->session->tempdata("city") != '')?$this->session->tempdata("city"):'');?>" placeholder="City / zip code" onchange="this.form.submit()">
				  
				  <div class="search_icon">
					<span class="ti-location-pin"></span>
				  </div>
				</div>
				<!--<a href="javascript:void(0)" class="btn btn-primary adv_filt" onclick="show_advance_fult();" style="padding-top:10px;padding-bottom:10px;border-radius:0px;text-align:center">Advance Filters</a>-->
			  </div>
			  <div class="facetwidget">
				<h3 class="facetwidget_h nomargin" data-toggle="collapse" data-target="#employer">Job Categories
				</h3>
				<div id="employer" class="facetwidgetbody collapse in">
				  <ul class="ullilist">
					<?php
						$i=0;
						foreach($job_cat As $uniqu_cat){
						  $i++;
						  $search_data_rr = explode(",",$this->session->tempdata("cat"));
						  //print_r($uniqu_cat);
						  //echo "-";
						  //print_r($search_data_rr);
						?>
							<li>
							  <div class="facetwiditem">
								<div class="chkbox csmall rfchck">
								  <div class="checkbox custom">
									<input type="checkbox" value="<?php echo $uniqu_cat->category_id;?>" name="cat[]" <?php echo((in_array($uniqu_cat->category_id, $search_data_rr))?'checked':'');?> onchange="this.form.submit();" class="frad" id="cid_<?php echo $i;?>">
									<label for="cid_<?php echo $i;?>" title="<?php echo $uniqu_cat->category_name;?>">
									  <a href="javascript:void(0);" class="a_underline" target="_blank"><?php echo substr($uniqu_cat->category_name,0,25);?> <?php echo((strlen($uniqu_cat->category_name) > 25)?'..':'');?>
									  </a>
									</label>
								  </div>
								</div>
								<!--<a class="fcnt" href="javascript:void(0)" onclick="hrefDataLink('cid_248505','top_emp')">15
								</a>-->
							  </div>
							</li>
						<?php
						 }
						?>
				  </ul>
				</div>


				<h3 class="facetwidget_h collapsed nomargin" data-toggle="collapse" data-target="#company_type" id="companyTypeDataTarget">Company Type
				</h3>
				<div class="facetwidgetbody collapse" id="company_type">
				  <ul class="ullilist">
					<?php
					$i=0;
					foreach($job_type As $uniqu_type){
						$i++;
					?>
					<li>
					  <div class="facetwiditem">
						<div class="chkbox csmall chcked">
						  <div class="radio custom">
							<input type="radio" value="<?php echo $uniqu_type->type;?>" name="type" onchange="this.form.submit();" <?php echo(($this->session->tempdata("type") == $uniqu_type->type)?'checked':'');?> class="frad" id="ctp_<?php echo $i;?>"> 
							<label for="ctp_<?php echo $i;?>" title="<?php echo strtoupper($uniqu_type->type);?>"><?php echo strtoupper($uniqu_type->type);?>
							</label>
						  </div>
						</div>
						<!--<a href="javascript:void(0)" onclick="hrefDataLink('ctp_1','top_comp')" class="fcnt">1071
						</a>-->
					  </div>
					</li>
					<?php
					 }
					?>
				  </ul>
				</div>


				<h3 class="facetwidget_h collapsed nomargin" data-toggle="collapse" data-target="#salary" id="salaryDataTarget">Annual Pay
				</h3>
				<div class="facetwidgetbody collapse" id="salary">
				  <ul class="ullilist">
					
					<?php
                    $m=10000;
					$i = 0;
                    for($i=1; $i < 15 ; $i++){
						$i++;
                    ?>
						<li>
						  <div class="facetwiditem">
							<div class="chkbox csmall chcked">
							  <div class="radio custom">
								<input type="radio" value="<?php echo $m*$i;?>" id="s_<?php echo $i;?>" name="ann_pay" onchange="this.form.submit()" <?php echo(($this->session->tempdata("ann_pay") == $m*$i)?'checked':'');?> class="frad"> 
								<label for="s_<?php echo $i;?>" title="ALL">$ <?php echo $m*$i;?></label>
							  </div>
							</div>
							<!--<a href="javascript:void(0)" onclick="hrefDataLink('s_*~*','top_sal')" class="fcnt">1751
							</a>-->
						  </div>
						</li>
					<?php
					   }
					?>	 
				  </ul>
				</div>
			  </div>
			  <div class="facetwidget_wrapper">
				<div class="facetwidget_b clearfix" style="width: auto;">
				  <a class="pull-left clear" href="javascript:void(0)" onclick="resetFormFields()">Clear all filters
				  </a>
				</div>
			  </div>
			</div>
		</form>
		<!-- sidebar ends -->