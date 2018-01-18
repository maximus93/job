<?php
  /*print_r($search_array['company_name']);
  foreach($search_array As $valuez){
    echo $valuez;
  }*/
?>
<div class="col-sm-3" style="background-color: #f2f2f2;padding: 10px;background-color: #f2f2f2;border: 1px solid #e0e0e0;min-height:450px;">  
      <form name="adv_search" method="POST" action="<?php echo base_url();?>joblisting">
      <div class="job_search" >
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

      <div class="cont_advance">

          <div class="job_title">Job Type</div>
           
            <div class="borderfull-width"></div>
              <div class="page-heading">
                <?php
                foreach($job_type As $uniqu_type){
                ?>
                    <div class="category">
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="radio" value="<?php echo $uniqu_type->type;?>" name="type" onchange="this.form.submit();" <?php echo(($this->session->tempdata("type") == $uniqu_type->type)?'checked':'');?>> 
                      </div>
                      <div class="col-md-10 col-sm-10 col-xs-10 sidebar-text" style="margin-top:3px;">
                        <?php echo strtoupper($uniqu_type->type);?>
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
                  $search_data_rr = explode(",",$this->session->tempdata("cat"));
                  //print_r($uniqu_cat);
                  //echo "-";
                  //print_r($search_data_rr);
                ?>
                    <div class="category">
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="checkbox" value="<?php echo $uniqu_cat->category_id;?>" name="cat[]" <?php echo((in_array($uniqu_cat->category_id, $search_data_rr))?'checked':'');?> onchange="this.form.submit();"> 
                      </div>
                      <div class="col-md-10 col-sm-10 col-xs-10 sidebar-text" style="margin-top:2px;" title="<?php echo $uniqu_cat->category_name;?>">
                        <?php echo substr($uniqu_cat->category_name,0,25);?> <?php echo((strlen($uniqu_cat->category_name) > 25)?'..':'');?>
                      </div>
                    </div>
                <?php
                 }
                ?>
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