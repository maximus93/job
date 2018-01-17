          <div class="col-sm-3" style="background-color: #f2f2f2;padding: 10px;background-color: #f2f2f2;border: 1px solid #e0e0e0;"> 
            <div class="job_search" >
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Job title / keywords">
                <div class="search_icon">
                  <span class="ti-briefcase">
                  </span>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="cityz" placeholder="City / zip code">
                <div class="search_icon">
                  <span class="ti-location-pin">
                  </span>
                </div>
              </div>
              <a href="#" class="btn btn-primary" style="padding-top:10px;padding-bottom:10px;border-radius:0px;">Advance Filters
              </a>
            </div>

            <div class="job_title">Job Type</div>
           
            <div class="borderfull-width"></div>
              <div class="page-heading">
                <?php
                foreach($job_type As $uniqu_type){
                ?>
                    <div class="category">
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="radio" id="PHP" value="<?php echo $uniqu_type->type;?>" name="ossm"> 
                      </div>
                      <div class="col-md-10 col-sm-10 col-xs-10 sidebar-text" style="margin-top:3px;">
                        <label for="PHP"><?php echo strtoupper($uniqu_type->type);?>
                        </label> 
                      </div>
                    </div>
                <?php
                 }
                ?>
              </div>

              <div class="job_title">Job Categories</div>
           
            <div class="borderfull-width"></div>
              <div class="page-heading">
                <?php
                foreach($job_cat As $uniqu_cat){
                ?>
                    <div class="category">
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="checkbox" id="PHP" value="<?php echo $uniqu_cat->category_name;?>" name="ossm"> 
                      </div>
                      <div class="col-md-10 col-sm-10 col-xs-10 sidebar-text" style="margin-top:2px;">
                        <label for="PHP"><?php echo $uniqu_cat->category_name;?>
                        </label> 
                      </div>
                    </div>
                <?php
                 }
                ?>
              </div>

          </div>
