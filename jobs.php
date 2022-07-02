<!Doctype html>
<html lang="en" dir="ltr">
   <head>
       <title>AMASS COMPANY</title>
        <meta charset="UTF-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="robots" content="index,follow">
        <meta name="description" content="AMASS COMPANY">
        <meta  name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
        <link rel="shortcut icon" href="./assests/images/favicon.ico" sizes="16x16">
        <!-------------- Chrome, Firefox OS and Opera ----------------->
        <meta name="theme-color" content="#20C997" />
        <!-------------// Chrome, Firefox OS and Opera ----------------->
        <!---------------------- Windows Phone ------------------------->
        <meta name="msapplication-navbutton-color" content="#20C997" />
        <!------------------------// Windows Phone --------------------->
        <!------------------------ iOS Safari -------------------------->
        <meta name="apple-mobile-web-app-status-bar-style" content="#20C997" />
        <!------------------------// iOS Safari ------------------------>
        <!----------------------------  PWA ---------------------------->
        <meta name="theme-color" content="#20C997" />
        <!---------------------------//  PWA --------------------------->
        <!------------------- Bootstrap ------------------------------>
        <link rel="stylesheet" href="./assests/css/bootstrap.min.css" />
        <!------------------- // Bootstrap --------------------------->
        <!------------------- Bootstrap RTL -------------------------->
        <!-- <link rel="stylesheet" href="./assests/css/bootstrap.rtl.min.css" /> -->
        <!----------------- // Bootstrap RTL ------------------------->
        <!-------------------- Animate Css --------------------------->
        <link rel="stylesheet" href="./assests/css/animate.css" />
        <!------------------- // Animate Css ------------------------->
        <!------------------- Font Awesome 5 & 4 Icons --------------->
        <link rel="stylesheet" href="./assests/css/all.min.css" />
        <link rel="stylesheet" href="./assests/css/fontawesome.min.css" />
        <link rel="stylesheet" href="./assests/css/font-awesome.min.css" />
        <!--------------- // Font Awesome 5 & 4 Icons --------------->
        <!--------------------------- Style ------------------------->
        <link rel="stylesheet" href="./assests/css/style.css">
        <!--------------------------- // Style ---------------------->
        <!------------------------ Style Ar ------------------------->
        <!-- <link rel="stylesheet" href="./assests/css/style-ar.css"> -->
        <!------------------------ // Style Ar ---------------------->
   </head>
   <body>

      <div class="body-content-wrapper">

      
      <?php include('components/header.php');?>
      
      <?php include('components/breadcrumb.php');?>

       
       <!--jobs-->
       <section class="jobs-sec sec">
           <div class="container">
               <div class="row">
                 <div class="col-lg-9 col-md-12">
                    <div class="head d-flex justify-content-between mb-5">
                       <h4 class="f-27 text-d-blue text-uppercase effect mb-4">Search Result</h4>
                       <a href="." class="text-gray text-capitalize effect">
                          View All Jobs
                        <span class="f-24 icon ms-3">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                       </span>
                      </a>
                      </div>
                 </div>
                 <aside class="col-lg-3 col-md-12 pe-0">
                     <div class="button">
                        <button class="btn btn-category w-100">
                          Categories
                        </button>
                    </div>
                 </aside>
                 <div class="col-lg-9 col-md-12">
                    <div class="content">
                    
                          <?php include('components/jobscard.php');?>
         
                    </div>
                 </div>
                 <aside class="col-lg-3 col-md-12 pe-0">
                        <div class="content h-100">
                    
                      
                          <div class="filter">
                           
                            <div class="input-group mb-4 p-3 pb-0">
                                <input type="text" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon1">
                                <span class="input-group-text" id="basic-addon1">
                                    <img src="./assests/images/search-icon.svg" class="img-responsive lazyload" data-src="./assests/images/search-icon.png" alt="search icon img"/>
                                </span>
                            </div>
                            
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                      <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                           <span class="icon">
                                              <img src="./assests/images/logo-icon.svg" class="img-responsive lazyload" data-src="./assests/images/logo-icon.svg" alt="logo icon img"/>
                                           </span>
                                          
                                             Medical Jobs
                                        </button>
                                      </h2>
                                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                         <div class="accordion-body">

                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="flexCheckDefault1">
                                                    <label class="form-check-label" for="flexCheckDefault1">
                                                       Motion Graphic
                                                    </label>
                                                </div>
                                                <span class="count">2</span>
                                            </div> 
                                            
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="flexCheckDefault2" checked>
                                                    <label class="form-check-label" for="flexCheckDefault2">
                                                      Video Editor
                                                    </label>
                                                </div>
                                                <span class="count">2</span>
                                            </div> 

                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="flexCheckDefault3">
                                                    <label class="form-check-label" for="flexCheckDefault3">
                                                      Photographer
                                                    </label>
                                                </div>
                                                <span class="count">4</span>
                                            </div> 

                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="flexCheckDefault4">
                                                    <label class="form-check-label" for="flexCheckDefault4">
                                                      Videographer
                                                    </label>
                                                </div>
                                                <span class="count">5</span>
                                            </div> 


                                         </div>
                                      </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            <span class="icon">
                                              <img src="./assests/images/logo-icon.svg" class="img-responsive lazyload" data-src="./assests/images/logo-icon.svg" alt="logo icon img"/>
                                            </span>
                                             Cafe Jobs
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="flexCheckDefault5">
                                                    <label class="form-check-label" for="flexCheckDefault5">
                                                       Ios Developer
                                                    </label>
                                                </div>
                                                <span class="count">2</span>
                                            </div> 
                                            
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="flexCheckDefault6">
                                                    <label class="form-check-label" for="flexCheckDefault6">
                                                      Social Media
                                                    </label>
                                                </div>
                                                <span class="count">2</span>
                                            </div> 

                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="flexCheckDefault7">
                                                    <label class="form-check-label" for="flexCheckDefault7">
                                                      Graphic Design
                                                    </label>
                                                </div>
                                                <span class="count">4</span>
                                            </div> 

                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="flexCheckDefault8">
                                                    <label class="form-check-label" for="flexCheckDefault8">
                                                      Videographer
                                                    </label>
                                                </div>
                                                <span class="count">5</span>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="trye" aria-controls="collapseThree">
                                            <span class="icon">
                                              <img src="./assests/images/logo-icon.svg" class="img-responsive lazyload" data-src="./assests/images/logo-icon.svg" alt="logo icon img"/>
                                            </span>           
                                             Resturant Jobs
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                              <div class="d-flex justify-content-between align-items-start">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="flexCheckDefault9">
                                                    <label class="form-check-label" for="flexCheckDefault9">
                                                       Video Editor
                                                    </label>
                                                </div>
                                                <span class="count">2</span>
                                            </div> 
                                            
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="flexCheckDefault10">
                                                    <label class="form-check-label" for="flexCheckDefault10">
                                                      Photographer
                                                    </label>
                                                </div>
                                                <span class="count">2</span>
                                            </div> 

                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="flexCheckDefault11">
                                                    <label class="form-check-label" for="flexCheckDefault11">
                                                     Videographer
                                                    </label>
                                                </div>
                                                <span class="count">4</span>
                                            </div> 


                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="flexCheckDefault12">
                                                    <label class="form-check-label" for="flexCheckDefault12">
                                                      Andriod Developer
                                                    </label>
                                                </div>
                                                <span class="count">5</span>
                                            </div>

                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="flexCheckDefault12">
                                                    <label class="form-check-label" for="flexCheckDefault12">
                                                      Ios Developer
                                                    </label>
                                                </div>
                                                <span class="count">7</span>
                                            </div> 


                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="flexCheckDefault13">
                                                    <label class="form-check-label" for="flexCheckDefault13">
                                                      Testing
                                                    </label>
                                                </div>
                                                <span class="count">9</span>
                                            </div> 



                                           </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                 </aside>
               </div>
                <div class="button mt-6">
                    <a href="." class="btn btn-primary mx-auto">
                        <span class="icon">
                            <i class="fa fa-tag" aria-hidden="true"></i>
                        </span>
                        Load More Jobs
                    </a>    
                </div>
           </div>
       </section>
       <!--//jobs-->

       <?php include('components/contactremind.php');?>

       <?php include('components/footer.php');?>

      
      </div>

        <!--script-->
        <!------------------------------ JQuery ------------------------------------>
        <script type="text/javascript" src="./assests/js/jquery-3.6.0.min.js"></script>
        <!------------------------------ // JQuery --------------------------------->
        <!------------------------------ Bootstrap --------------------------------->
        <script type="text/javascript" src="./assests/js/bootstrap.min.js"></script>
        <!------------------------------// Bootstrap ------------------------------->
        <!------------------------------- Lazyload --------------------------------->
        <script type="text/javascript" src="./assests/js/lazyload.min.js"></script>
        <!------------------------------// Lazyload -------------------------------->
        <!------------------------------- Splitting -------------------------------->
        <script type="text/javascript" src="./assests/js/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="./assests/js/TweenMax.min.js"></script>
        <script type="text/javascript" src="./assests/js/splitting.min.js"></script>
        <!-----------------------------// Splitting -------------------------------->
        <!----------------------------------- Wow ---------------------------------->
        <script type="text/javascript" src="./assests/js/wow.min.js"></script>
        <!--------------------------------// Wow ----------------------------------->
        <!------------------------------- Main ------------------------------------->
        <script type="text/javascript" src="./assests/js/main.js"></script>
        <!-------------------------------// Main ----------------------------------->
        <!--//script-->

   
   </body>

</html>