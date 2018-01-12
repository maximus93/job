<div class="col-sm-3 explore-results" style="background:#fafafa;border-left:1px solid #f5f5f5;">
  <div class="facet-label" style="font-size:18px;color:#06c;">Search by keyword</div>
  <p> </p>
  <div class="refine-keyword-location">
    
    <form action="" method="post">        
      <div class="form-group">
        <div class="input-group">
          <input autocomplete="off" class="form-control" id="keywords" name="Keywords" placeholder="Job title, skill or company" tabindex="1" type="text" value="" style="width:260px;"/>
          <input type="hidden" id="iptHiddenKeywords"/>
        </div>
      </div>
    </form>
  </div>
  <div class="your-filters facet-block">
    <div class="search-tags-list">
    </div>
  </div>
  <div class="facet-scroll">
    <div id="facetListJobTitle" class="facet-block ">
      <div class="facet-label" style="color:#06c;">Salary range</div>
        <div class="facet-selection">
          <ul class="facet-links">
            <li><a href="#" style="color:black;"><input type="radio" name="salary"> $30k + </a> </li>
            <li><a href="#" style="color:black;"><input type="radio" name="salary"> $40k + </a></li>
            <li><a href="#" style="color:black;"><input type="radio" name="salary"> $50k + </a></li>
            <li><a href="#" style="color:black;"><input type="radio" name="salary"> $60k + </a></li>
            <li><a href="#" style="color:black;"><input type="radio" name="salary"> $70k + </a></li>
            <li><a href="#" style="color:black;"><input type="radio" name="salary"> $80k + </a></li>
            <li><a href="#" style="color:black;"><input type="radio" name="salary"> $100k + </a></li>
            <li><a href="#" style="color:black;"><input type="radio" name="salary"> $125k + </a></li>
            <li><a href="#" style="color:black;"><input type="radio" name="salary"> $150k + </a></li>
          </ul>
        </div>
    </div>

    <div id="facetListJobTitle" class="facet-block ">
      <div class="facet-label" style="color:#06c;">Search by cities</div>
        <div class="facet-selection">
          <ul class="facet-links">
            <li><a href="#" style="color:black;">Sydney</a> <span class="job-count">(143)</span></li>
            <li><a href="#" style="color:black;">Albury</a> <span class="job-count">(143)</span></li>
            <li><a href="#" style="color:black;">Armidale</a> <span class="job-count">(1431)</span></li>
            <li><a href="#" style="color:black;">Bathurst</a> <span class="job-count">(1143)</span></li>
            <li><a href="#" style="color:black;">Blue Mountains</a> <span class="job-count">(1431)</span></li>
            <li><a href="#" style="color:black;">Broken Hill</a> <span class="job-count">(1431)</span></li>
            <li><a href="#" style="color:black;">Campbelltown</a> <span class="job-count">(1431)</span></li>
            <li><a href="#" style="color:black;">Cessnock</a> <span class="job-count">(1143)</span></li>
            <li><a href="#" style="color:black;">Dubbo</a> <span class="job-count">(122)</span></li>
            <li><a href="#" style="color:black;">Goulburn</a> <span class="job-count">(3131)</span></li>
            <li><a href="#" style="color:black;">Grafton</a> <span class="job-count">(141)</span></li>
            <li><a href="#" style="color:black;">Lithgow</a> <span class="job-count">(113)</span></li>
            <li><a href="#" style="color:black;">Liverpool</a> <span class="job-count">(121)</span></li>
            <li><a href="#" style="color:black;">Newcastle</a> <span class="job-count">(231)</span></li>
            <li><a href="#" style="color:black;">Orange</a> <span class="job-count">(13)</span></li>
            <li><a href="#" style="color:black;">Parramatta</a> <span class="job-count">(15)</span></li>
          </ul>
        </div>
    </div>
    
    <div id="facetRelatedJobs" class="facet-block expand-item">
      <div class="facet-label hidden-xs" style="color:#06c;">Search by category</div>
      <div class="drilldown-container collapsed">
        <ul class="facet-links">
          <?php
              $merge = "";
              foreach($skills_all As $skills_unique){
                $merge .= $skills_unique->skills;
              }
              $convert_merge_to = explode(",",$merge);
              foreach($convert_merge_to As $key=>$uniqu_skills){
          ?>
          <li><input type="checkbox" value="<?php echo $uniqu_skills;?>"> <a href="#" style="color:black;font-size:13px;"><?php echo strtoupper($uniqu_skills);?></a></li>
          <?php
          }
          ?>  
        </ul>
        
      </div>
    </div>
  </div>
</div>