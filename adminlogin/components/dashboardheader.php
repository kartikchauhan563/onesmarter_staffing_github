<div class="header bg-success pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Onesmarter Staffing Dashboard</h6>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total No of Candidates</h5>
                      <span class="h2 font-weight-bold mb-0">
                        <?php
                          $totalcandidate="SELECT id FROM candidates ORDER BY id";
                          $totalcandidate_run=mysqli_query($conn,$totalcandidate);
                          $row=mysqli_num_rows($totalcandidate_run);
                          echo '<h1>'.$row.'</h1>';
                          ?>
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-3">Total No of Jobs</h5>
                      <?php
                      $totalcandidate="SELECT id FROM addjobs ORDER BY id";
                      $totalcandidate_run=mysqli_query($conn,$totalcandidate);
                      $row=mysqli_num_rows($totalcandidate_run);
                      echo '<h1>'.$row.'</h1>';
                      ?>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Number of Selected Candidates</h5>
                      <span class="h2 font-weight-bold mb-0"> 
                      <?php
                        $selectedcandidate="SELECT id FROM candidates where jobstatus='selected'";
                        $selectedcandidate_run=mysqli_query($conn,$selectedcandidate);
                        $row=mysqli_num_rows($selectedcandidate_run);
                        echo '<h1>'.$row.'</h1>';
                        ?>
                        </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>