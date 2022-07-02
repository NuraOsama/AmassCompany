<?php $activePage = basename($_SERVER['PHP_SELF']);?>

<!-- modal -->
<div class="modal fade" id="amassModal" tabindex="-1" aria-labelledby="amassModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">  
    <div class="modal-content">
      <div class="modal-header <?= ($activePage != 'job-details.php') ? 'pb-2':''; ?>">
        <div href="." class="navbar-brand">
            <img src="./assests/images/logo.svg" class="img-responsive lazyload" data-src="./assests/images/logo.svg" alt="logo img"/>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     <div class="modal-body <?= ($activePage != 'job-details.php') ? 'py-5':'pb-5'; ?>">

        <div class="container">
              <div class="row">
              <?php
                 if ($activePage != 'job-details.php') {
                echo '<div class="col-lg-5 col-md-12">
                        <div class="image">
                           <img src="./assests/images/modal-img.png" class="img-responsive h-550 object-fit effect lazyload" data-src="./assests/images/modal-img.png" alt="modal img"/>
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-12">
                       <div class="content mt-2">
                          <div class="project-image mb-5">
                            <img src="./assests/images/project.1.png" class="img-responsive object-contain w-200 lazyload" data-src="./assests/images/project.1.png" alt="project img"/>
                          </div>
                          <div class="paragh mb-5">
                                <p class="f-19 text-brown">
                                   Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                   Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, 
                                   when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has .
                               </p>
                          </div>
                          <div class="contacts-info pt-3">
                            <div class="info d-inline-flex mb-5">
                                <span class="icon me-4">
                                    <img src="./assests/images/location-icon.svg" class="img-responsive w-auto h-auto lazyload" data-src="./assests/images/location-icon.svg" alt="location icon img"/>   
                                </span>
                                <div class="head">
                                    <h5 class="f-19 text-black mb-1  text-capitalize effect">Location</h5>
                                    <span class="f-18 text-black effect">Vous avez des questions ? Vous souhaitez en savoir plus  L’équipe FORMATION est à votre disposition.Vous avez des questions ? Vous. </span>
                                </div>
                            </div>   
                            <div class="d-flex align-items-center">
                                <div class="info d-inline-flex">
                                    <span class="icon me-4">
                                       <img src="./assests/images/email-icon.svg" class="img-responsive w-auto h-auto lazyload" data-src="./assests/images/email-icon.svg" alt="email icon img"/>   
                                    </span>
                                    <div class="head">
                                       <h5 class="f-19 text-black mb-1 text-capitalize effect">Contact</h5>
                                       <span class="f-18 text-black f-en effect">Jobs@Amas.com</span>
                                    </div>
                                </div>
                                <div class="info d-inline-flex">
                                    <span class="icon me-4">
                                       <img src="./assests/images/mobile-icon.svg" class="img-responsive w-auto h-auto lazyload" data-src="./assests/images/mobile-icon.svg" alt="mobile icon img"/>   
                                    </span>
                                    <div class="head">
                                       <h5 class="f-19 text-black mb-1 text-capitalize effect">Mobile</h5>
                                       <span class="f-18 text-black effect">+996 777363628</span>
                                    </div>
                                </div>
                            </div>

                         </div>

                       </div>
                     </div>';

              }
              else{

            echo  '<div class="col-lg-5 col-md-10 col-sm-12 mx-auto">
                     <div class="content">
                        <div class="head mb-4">
                            <h4 class="f-32 text-d-black text-capitalize effect mb-3">Apply For This Job</h4>
                            <p class="f-17 text-e-gray effect">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="terms mb-4 pb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault" checked>
                                    <label class="form-check-label text-dark" for="flexCheckDefault">
                                        I agree with <span class="text-green">Terms of use</span>
                                    </label>               
                            </div>                 
                        </div>

                        <form action="" method="POST" class="needs-validation" novalidate>
                                
                            <div class="card mb-4 p-4">

                           
                                <div class="head mb-3">
                                    <h5 class="text-d-black mb-1">Personal data</h5>
                                    <p class="f-14 text-e-gray">Lorem Ipsum is simply dummy text</p>
                                </div>

                                <div class="mb-4">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter your name here" required />
                                    <span class="invalid-feedback">Name is required</span>
                                </div>

                                <div class="mb-4">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email here" required />
                                    <span class="invalid-feedback">Email Address is required</span>
                                </div>

                              
                                <div>
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" placeholder="Enter message here" required></textarea>
                                    <span class="invalid-feedback">Message is required</span>   
                                </div>

                            </div>
                            
                            <div class="input-group mb-4">
                                <label for="inputGroupFile" class="form-label f-17">Resume Upload</label>
                                <input type="file" class="form-control" id="inputGroupFile" required>
                                <span class="invalid-feedback">choose file is required</span>
                            </div>



                                <div class="button">
                                    <button type="submit" class="btn btn-primary btn-apply me-auto">
                                        <span class="icon">
                                            <i class="fa fa-tag" aria-hidden="true"></i>
                                        </span>
                                        Send Application
                                    </button>
                                </div>
                            </form>

                     </div>
                   </div>';

              }
              ?>




              </div>
        </div>
     </div>


    </div>
  </div>
</div>
<!-- //modal -->
