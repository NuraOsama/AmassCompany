<?php $activePage = basename($_SERVER['PHP_SELF']);?>


<div class="jobs">
     <div class="row">
     <?php if  ($activePage == 'jobs.php') {
      for ($i = 0; $i <= 8 ; $i ++) {
        echo  '<div class="col-lg-4 col-md-6 col-sm-12">
                 <a href="job-details.php" class="card wow zoomIn" wow-data-delay="0.15" wow-data-duration="0.15">
                   <div class="card-header d-flex justify-content between align-items-start">
                      <div class="image">
                        <img src="./assests/images/jobs-img.jpg" class="img-responsive  object-fit lazyload" data-src="./assests/images/jobs-img.jpg" alt="jobs img"/>
                      </div>
                      <div class="title">
                         <h5 class="f-16 text-dark mb-1">Amass medical</h5>
                         <span class="f-14 text-dark">Freelance</span>
                      </div>
                   </div>
                   <div class="card-body">
                     <div class="text mb-2">
                        <h5 class="f-17 text-blue text-capitalize mb-1">Senior UI Designer</h5>
                        <span class="f-14 text-dark">Fulltime</span>
                     </div>
                     <div class="paragh">
                        <p class="f-11 text-brown webkitline-5">
                          Lorem ipsum dolor sit amet, consectet adipiscing elit. Consequat nunc ac a magna at elementum. 
                          Cras arcu varius aliquam habitant fermentum. Mi sit loremollis vitae quis curabitur vestibulum.
                        </p>
                     </div>
                     <div class="d-flex justify-content-between align-items-baseline">
                        <span class="price f-17 text-dark">$2500<small class="f-14">/month</small></span>
                        <button class="btn btn-info text-uppercase">Apply Now</button>
                     </div>
                   </div>
             </a>
            </div>';
        }
      }
      else{

         for ($i = 0; $i <= 3 ; $i ++) {

         echo '<div class="col-lg-3 col-md-6 col-sm-12">
                <a href="job-details.php" class="card wow zoomIn" wow-data-delay="0.15" wow-data-duration="0.15">
                  <div class="card-header d-flex justify-content between align-items-start">
                    <div class="image">
                      <img src="./assests/images/jobs-img.jpg" class="img-responsive  object-fit lazyload" data-src="./assests/images/jobs-img.jpg" alt="jobs img"/>
                    </div>
                    <div class="title">
                      <h5 class="f-16 text-dark mb-1">Amass medical</h5>
                      <span class="f-14 text-dark">Freelance</span>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="text mb-2">
                      <h5 class="f-17 text-blue text-capitalize mb-1">Senior UI Designer</h5>
                      <span class="f-14 text-dark">Fulltime</span>
                    </div>
                    <div class="paragh">
                      <p class="f-11 text-brown webkitline-5">
                        Lorem ipsum dolor sit amet, consectet adipiscing elit. Consequat nunc ac a magna at elementum. 
                        Cras arcu varius aliquam habitant fermentum. Mi sit loremollis vitae quis curabitur vestibulum.
                      </p>
                    </div>
                    <div class="d-flex justify-content-between align-items-baseline">
                        <span class="price f-17 text-dark">$2500<small class="f-14">/month</small></span>
                        <button class="btn btn-info text-uppercase">Apply Now</button>
                    </div>
                  </div>
                </a>
             </div>';
         }
      }
      ?>
     </div>


</div>