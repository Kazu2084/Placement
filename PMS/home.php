<?php
	include('Common/applicant-sidenav-header.php');
?>
<div class="app-content" style="padding-bottom: 24px">
	<div>
		<h1 class="app-content-headerText">Search Jobs</h1>
	</div>
	<div></div>
	<br />

      <div class="overlay"></div>
      <div class="container">
        <!-- <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }"> -->

            <div class="ftco-search">
              <div class="row">
                
                <div class="col-md-12 tab-wrap">
                  
                  <div class="tab-content p-4" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                   
                        <form  class="search-job" action="index.php?q=result&searchfor=advancesearch" method="POST"> 
                        <div class="row">
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-briefcase"></span></div>
                                <input type="text"  name="SEARCH" class="form-control" placeholder="eg. Garphic. Web Developer">
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="select-wrap">
                                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                  <select name="CATEGORY" class="form-control">
                                    <option value="">Category</option>
                                    <?php
                                      $sql = "SELECT * FROM `tblcategory`";
                                      $mydb->setQuery($sql);
                                      $res = $mydb->loadResultList();
                                      foreach ($res as $row) { 
                                        echo '<option>'.$row->CATEGORY.'</option>';
                                      }
                                    ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-map-marker"></span></div>
                                 <select  name="COMPANY" class="form-control">
                                    <option value="">Company</option>
                                   <?php
                                      $sql = "SELECT * FROM tblcompany";
                                      $mydb->setQuery($sql);
                                      $res = $mydb->loadResultList();
                                      foreach ($res as $row) { 
                                        echo '<option>'.$row->COMPANYNAME.'</option>';
                                      }
                                    ?>
                                  </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <input type="submit" value="Search" class="form-control btn btn-primary">
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>

                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    