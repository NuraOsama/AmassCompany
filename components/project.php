<?php $activePage = basename($_SERVER['PHP_SELF']);?>

<!--projects-->
<section class="projects-sec sec">
    <div class="container">

        <?php  
        
          if ($activePage != 'projects.php' ) {
            
            echo '  <div class="head text-center mb-5 pb-5">
                      <h4 class="f-27 text-blue text-uppercase effect mb-4">Our project</h4>
                      <p class="f-21  text-d-gray text-center effect w-60 mx-auto">
                         Start working with amas that can provide everything you
                         connect. Dummy text is text that is used in the publishing
                      </p>
                    </div>
                   <div class="row">
                        <div class="col-lg-6 col-md-12 col-pe-2">
                           <div class="content projects d-flex flex-column h-100">
                            <div class="row">
                               <div class="col-md-6 col-sm-12">
                                <a href="." class="project d-block mb-5" data-bs-toggle="modal" data-bs-target="#amassModal">
                                  <div class="image">
                                    <img src="./assests/images/project.1.png" class="img-responsive lazyload" data-src="./assests/images/project.1.png" alt="project img"/>
                                  </div>
                                  <div class="paragh">
                                     <p class="f-15 text-d-blue text-center mx-auto w-80 webkitline-3">Lorem Ipsum is simply dummy text of the printing .</p>
                                  </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a href="." class="project  d-block  mb-5" data-bs-toggle="modal" data-bs-target="#amassModal">
                                  <div class="image">
                                    <img src="./assests/images/project.2.png" class="img-responsive lazyload" data-src="./assests/images/project.2.png"" alt="project img"/>
                                  </div>
                                 <div class="paragh">
                                   <p class="f-15 text-d-blue text-center mx-auto w-80 webkitline-3">Lorem Ipsum is simply dummy text of the printing .</p>
                                 </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a href="."  class="project  d-block  mb-5" data-bs-toggle="modal" data-bs-target="#amassModal">
                                    <div class="image">
                                       <img src="./assests/images/project.3.png" class="img-responsive lazyload" data-src="./assests/images/project.3.png"" alt="project img"/>
                                    </div>
                                    <div class="paragh">
                                       <p class="f-15 text-d-blue text-center mx-auto w-80 webkitline-3">Lorem Ipsum is simply dummy text of the printing .</p>
                                    </div>
                                </a>
                            </div>   
                            <div class="col-md-6 col-sm-12">
                                <a href="."  class="project  d-block  mb-5" data-bs-toggle="modal" data-bs-target="#amassModal">
                                    <div class="image">
                                      <img src="./assests/images/project.4.png" class="img-responsive lazyload" data-src="./assests/images/project.4.png"" alt="project img"/>
                                    </div>
                                    <div class="paragh">
                                       <p class="f-15 text-d-blue text-center mx-auto w-80 webkitline-3">Décrire Seven formation dans la démarche qualité .</p>
                                    </div>
                                </a>
                            </div>           
                      </div>
                        <div class="button mt-auto">
                            <a href="projects.php" class="btn btn-primary mx-auto">
                               <span class="icon">
                                  <i class="fa fa-tag" aria-hidden="true"></i>
                               </span>
                                View All Project
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-ps-2">
                    <div class="image projects effect-image">
                       <img src="./assests/images/project-img.png" class="img-responsive object-fit h-550  lazyload" data-src="./assests/images/project-img.png" alt="project img"/>
                    </div>
                </div>
            </div>';
       
      }
      else{
        for ($i = 0; $i <= 1; $i ++) {
          echo '  
            <div class="row">  
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <a href="." class="project d-block mb-5" data-bs-toggle="modal" data-bs-target="#amassModal">
                    <div class="image overflow-hidden">
                        <img src="./assests/images/project.1.png" class="img-responsive lazyload effect" data-src="./assests/images/project.1.png"" alt="project img"/>
                    </div>
                    <div class="paragh overflow-hidden">
                       <p class="f-15 text-d-blue text-center mx-auto w-80  webkitline-3 effect">Lorem Ipsum is simply dummy text of the printing .</p>
                    </div>
                  </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                   <a href="." class="project  d-block  mb-5" data-bs-toggle="modal" data-bs-target="#amassModal">
                    <div class="image overflow-hidden">
                       <img src="./assests/images/project.2.png" class="img-responsive effect lazyload" data-src="./assests/images/project.2.png"" alt="project img"/>
                    </div>
                    <div class="paragh overflow-hidden">
                       <p class="f-15 text-d-blue text-center mx-auto w-80 webkitline-3 effect">Lorem Ipsum is simply dummy text of the printing .</p>
                    </div>
                  </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <a href="." class="project d-block mb-5" data-bs-toggle="modal" data-bs-target="#amassModal">
                    <div class="image overflow-hidden">
                       <img src="./assests/images/project.1.png" class="img-responsive effect lazyload" data-src="./assests/images/project.1.png"" alt="project img"/>
                    </div>
                    <div class="paragh overflow-hidden">
                       <p class="f-15 text-d-blue text-center mx-auto w-80 webkitline-3 effect">Lorem Ipsum is simply dummy text of the printing .</p>
                    </div>
                  </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <a href="." class="project  d-block  mb-5" data-bs-toggle="modal" data-bs-target="#amassModal">
                    <div class="image overflow-hidden">
                      <img src="./assests/images/project.2.png" class="img-responsive effect lazyload" data-src="./assests/images/project.2.png"" alt="project img"/>
                    </div>
                    <div class="paragh overflow-hidden">
                      <p class="f-15 text-d-blue text-center mx-auto w-80 webkitline-3 effect">Lorem Ipsum is simply dummy text of the printing .</p>
                    </div>
                  </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <a href="."  class="project  d-block  mb-5" data-bs-toggle="modal" data-bs-target="#amassModal">
                    <div class="image overflow-hidden">
                       <img src="./assests/images/project.3.png" class="img-responsive effect lazyload" data-src="./assests/images/project.3.png"" alt="project img"/>
                    </div>   
                    <div class="paragh overflow-hidden">
                      <p class="f-15 text-d-blue text-center mx-auto w-80 webkitline-3 effect">Lorem Ipsum is simply dummy text of the printing .</p>
                    </div>
                   </a>
                </div>   
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <a href="."  class="project  d-block  mb-5" data-bs-toggle="modal" data-bs-target="#amassModal">
                    <div class="image overflow-hidden">
                      <img src="./assests/images/project.4.png" class="img-responsive effect lazyload" data-src="./assests/images/project.4.png"" alt="project img"/>
                    </div>
                    <div class="paragh overflow-hidden">
                       <p class="f-15 text-d-blue text-center mx-auto w-80 webkitline-3 effect">Décrire Seven formation dans la démarche qualité .</p>
                    </div>       
                  </a>
                </div>  
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <a href="."  class="project  d-block  mb-5" data-bs-toggle="modal" data-bs-target="#amassModal">
                    <div class="image overflow-hidden">
                        <img src="./assests/images/project.3.png" class="img-responsive effect lazyload" data-src="./assests/images/project.3.png"" alt="project img"/>
                    </div>   
                    <div class="paragh overflow-hidden">
                       <p class="f-15 text-d-blue text-center mx-auto w-80 webkitline-3 effect">Lorem Ipsum is simply dummy text of the printing .</p>
                    </div>
                  </a>
                </div>   
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <a href="."  class="project  d-block  mb-5" data-bs-toggle="modal" data-bs-target="#amassModal">
                    <div class="image overflow-hidden">
                       <img src="./assests/images/project.4.png" class="img-responsive effect lazyload" data-src="./assests/images/project.4.png"" alt="project img"/>
                    </div>
                    <div class="paragh overflow-hidden">
                       <p class="f-15 text-d-blue text-center mx-auto w-80 webkitline-3 effect">Décrire Seven formation dans la démarche qualité .</p>
                    </div>       
                  </a>
                </div>  
            </div> ';
         }
        }
    ?>      
       

    </div>
</section>
<!--//projects-->

<?php include('components/modal.php');?>




