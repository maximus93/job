<?php
  /*print_r($search_array['company_name']);
  foreach($search_array As $valuez){
    echo $valuez;
  }*/
?>
<div class="col-sm-3" style="background-color: #f2f2f2;padding: 10px;background-color: #f2f2f2;border: 1px solid #e0e0e0;">	
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
        <a href="javascript:void(0)" class="btn btn-primary adv_filt" onclick="show_advance_fult();" style="padding-top:10px;padding-bottom:10px;border-radius:0px;text-align:center">Advance Filters</a>
      </div>

      <div class="cont_advance">
            <div class="job_title">Skills</div>
            <?php
              print_r($this->session->tempdata("all_skills"));
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
              ?>
                  <div class="category">
                    <div class="col-md-2 col-sm-2 col-xs-2">
                      <input type="checkbox" value="<?php echo $uniqu_skills;?>" name="skills[]" <?php echo(($this->session->tempdata("all_skills") == $uniqu_skills)?'checked':'');?> onchange="this.form.submit()"> 
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