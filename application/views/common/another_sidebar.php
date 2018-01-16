<div class="col-sm-3" style="background-color: #f2f2f2;padding: 10px;background-color: #f2f2f2;border: 1px solid #e0e0e0;">	
      <div class="job_search" >
        <div class="form-group">
          <input type="text" class="form-control" id="cityz" placeholder="City / zip code">
          <div class="search_icon">
            <span class="ti-location-pin"></span>
          </div>
          <p> </p>
          <select class="form-control" >
            <option selected disabled>Company Name</option>
            <?php
                //print_r($comp_name);
                foreach($comp_name As $fetch_comp){
                  if($fetch_comp->company_name != ""){
            ?>
            <option value="<?php echo $fetch_comp->company_name;?>">
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
              //print_r($skills_all);
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
                      <input type="checkbox" id="PHP" value="<?php echo $uniqu_skills;?>" name="ossm"> 
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
                      <input type="checkbox" id="PHP" value="<?php echo $uniqu_skills;?>" name="ossm"> 
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

                  <div class="category">
                    <div class="col-md-2 col-sm-2 col-xs-2">
                      <input type="radio" id="PHP" value="1" name="ossm"> 
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10 sidebar-text">
                      0-1 yrs
                    </div>
                  </div>

                  <div class="category">
                    <div class="col-md-2 col-sm-2 col-xs-2">
                      <input type="radio" id="PHP" value="2" name="ossm"> 
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10 sidebar-text">
                      1-2 yrs
                    </div>
                  </div>

                  <div class="category">
                    <div class="col-md-2 col-sm-2 col-xs-2">
                      <input type="radio" id="PHP" value="3" name="ossm"> 
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10 sidebar-text">
                      2-3 yrs
                    </div>
                  </div>

                  <div class="category">
                    <div class="col-md-2 col-sm-2 col-xs-2">
                      <input type="radio" id="PHP" value="5" name="ossm"> 
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10 sidebar-text">
                      3-5 yrs
                    </div>
                  </div>

                  <div class="category">
                    <div class="col-md-2 col-sm-2 col-xs-2">
                      <input type="radio" id="PHP" value="6" name="ossm"> 
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10 sidebar-text">
                      5+ yrs 
                    </div>
                  </div>

            </div>

            <div class="job_title">Relocation</div>
            
            <div class="borderfull-width"></div>
            <div class="page-heading">
              
                  <div class="category">
                    <div class="col-md-2 col-sm-2 col-xs-2">
                      <input type="radio" id="PHP" value="yes" name="ossm"> 
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10 sidebar-text">
                      Yes
                    </div>
                  </div>

                  <div class="category">
                    <div class="col-md-2 col-sm-2 col-xs-2">
                      <input type="radio" id="PHP" value="no" name="ossm"> 
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
                    for($i=1; $i < 9 ; $i++){
                    ?>
                    <div class="category">
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="radio" id="PHP" value="1" name="ossm"> 
                      </div>
                      <div class="col-md-10 col-sm-10 col-xs-10 sidebar-text">
                        $ <?php echo $m*$i;?>
                      </div>
                    </div>
                  <?php
                   }
                  ?>
              
            </div>
      </div>
</div>