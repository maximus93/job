          <div class="col-sm-3" style="background-color: #f2f2f2;padding: 10px;
                                       background-color: #f2f2f2;
                                       border-right: 1px solid #e0e0e0;">	
            <div class="job_search" >
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Job title / keywords">
                <div class="search_icon">
                  <span class="ti-briefcase">
                  </span>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="City / zip code">
                <div class="search_icon">
                  <span class="ti-location-pin">
                  </span>
                </div>
              </div>
              <a href="#" class="btn btn-primary" style="padding-top:10px;padding-bottom:10px;border-radius:0px;">Search Job Results
              </a>
            </div>

            <div class="job_title">Skills</div>
            <?php
              //print_r($skills_all);
              $merge = "";
              foreach($skills_all As $skills_unique){
                $merge .= $skills_unique->skills;
              }
              $convert_merge_to = explode(",",$merge);
            ?>
            <div class="borderfull-width">
            </div>
            <div class="page-heading">
              <?php
              foreach($convert_merge_to As $key=>$uniqu_skills){
              ?>
              <div class="category">
                <div class="col-md-1 p-l p-r">
                  <input type="checkbox" id="PHP" value="<?php echo $uniqu_skills;?>" name="ossm"> 
                </div>
                <div class="col-md-11 p-l p-r sidebar-text">
                  <label for="PHP"><?php echo strtoupper($uniqu_skills);?>
                  </label> 
                </div>
              </div>
              <?php
               }
              ?>
            </div>
          </div>