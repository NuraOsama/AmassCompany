<?php $activePage = basename($_SERVER['PHP_SELF']);?>
  
 <!--about-->
 <section   class="about-sec position-relative z-1 sec">
     <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-12 col-pe-2">
               <div class="image about overflow-hidden">
                     <img src="./assests/images/about-img.png" class="img-responsive  <?= ($activePage == 'index.php') ? 'h-670':'h-600'; ?> object-fit effect lazyload" data-src="./assests/images/about-img.png" alt="about img"/>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-ps-2">
                <div class="content about d-flex flex-column h-100">
                  <div class="head mb-5">
                         <h4 class="f-27 effect d-block text-green text-uppercase letter-spacing mb-2">About us</h4>
                         <h4 class="f-35 effect text-dark text-capitalize">Why 35,000+ People Trust on Amass ? </h4>
                  </div>
                  <div class="list mb-3 pt-3">
                    <ul>
                    <?php                   
                      for ($i = 0; $i <= 2; $i ++) {
                       echo '<li>
                               <div class="icon">
                                 <span><img src="./assests/images/check.svg" class="img-responsive lazyload" data-src="./assests/images/check.svg" alt="check icon img"></span>
                               </div>
                               <div class="head">
                                  <h5 class="f-17 text-green webkitline-3">
                                      Lorem Ipsum is simply dummy text
                                   </h5>
                                   <p class="f-15 text-d-blue webkitline-3">
                                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                     Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.
                                   </p> 
                               </div> 
                             </li>';
                        }
                      ?>
                   </ul>
                  </div>
                   <?php if ($activePage == 'index.php') {

                      echo '<div class="button mt-auto">
                              <a href="about-us.php" class="btn btn-primary">
                                <span class="icon">
                                  <i class="fa fa-tag"aria-hidden="true"></i>
                                </span>
                                  Read More About us
                              </a>
                            </div>';

                      }
                    ?>
                </div>
              </div>
         </div>
     </div>
 </section>
 <!--//about-->