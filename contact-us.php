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
        <!--------------------- Select 2 --------------------------->
        <link rel="stylesheet" href="./assests/css/select2.min.css" />
        <!------------------- //Select 2 --------------------------->
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

        <!--branches-->
        <section class="branches-sec sec mb-0">
               <div class="container">
                   <div class="row">
                   <?php  $branchname = ['Branch 1','Branch 2','Branch 3'];                   
                 
                      for ($i = 0; $i <= 2; $i ++) {
                       echo "<div class='col-lg-4 col-md-12'>
                       <div class='content branches'>
                         <div class='head mb-4'>
                            <h5 class='f-35 text-dark text-capitalize effect'>" ,$branchname[$i], "</h5>
                         </div>
                         <div class='contacts-info'>
                           <ul>
                               <li class='mb-2-5 overflow-hidden'>
                                   <h5 class='f-20 text-black text-capitalize effect'>Location</h5>
                                   <span class='f-15 text-black d-block effect'>Egypt , Mansoura</span>
                               </li>
                               <li class='mb-2-5 overflow-hidden'>
                                  <a href='.'>
                                      <h5 class='f-20 text-black text-capitalize effect'>Contact</h5>
                                      <span class='f-15 text-black f-en d-block effect'>Jobs@Amas.com</span>
                                  </a>  
                               </li>
                               <li class='mb-2-5 overflow-hidden'>
                                   <h5 class='f-20 text-black text-capitalize effect'>Mobile</h5>
                                   <span class='f-15 text-black d-block effect'>+996 777363628</span>
                               </li>
                           </ul>
                         </div>
                       </div>
                  </div>";
                        }
                      ?>
                
                   </div>
               </div>
        </section>
        <!--//branches-->


        <!--contact us-->
        <section class="contact-sec sec pt-3">
         <div class="container"> 
                <div class="head mb-4">
                    <h4 class="f-35 text-dark text-capitalize effect">Get in Touch</h4>
                </div>
               <div class="row">
                   <div class="col-lg-6 col-md-12 px-5">
                         <div class="content contact">
                           <form action="" method="POST" class="needs-validation pt-4" novalidate>
                                <div class="mb-4">
                                    <label for="name" class="form-label">First name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter your name here" required />
                                    <span class="invalid-feedback">First Name is required</span>
                                </div>

                                <div class="mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email here" required />
                                    <span class="invalid-feedback">Email is required</span>
                                </div>


                                <div class="mb-4">
                                    <label for="subject" class="form-label">Subject</label>
                                    <select class="js-example-placeholder-single form-control" id="subject" aria-describedby="subjectHelp"  required />
                                        <option value=""></option>
                                        <option value="1">Subject 1</option>
                                        <option value="1">Subject 2</option>
                                        <option value="1">Subject 3</option>
                                        <option value="1">Subject 4</option>
                                        <option value="1">Subject 5</option>
                                        <option value="1">Subject 6</option>
                                        <option value="1">Subject 7</option>
                                        <option value="1">Subject 8</option>
                                        <option value="1">Subject 9</option>
                                        <option value="1">Subject 10</option>
                                       </select>      
                                    <span class="invalid-feedback">Subject is required</span>
                                </div>

                              
                                <div class="mb-4">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" placeholder="Write message here" required></textarea>
                                    <span class="invalid-feedback">Message is required</span>   
                                </div>


                                <div class="button pt-5">
                                    <button type="submit" class="btn btn-primary me-auto">
                                        <span class="icon">
                                            <i class="fa fa-tag" aria-hidden="true"></i>
                                        </span>
                                        Send Your Message
                                    </button>
                                </div>
                            </form>
                         </div>     
                   </div>
                   <div class="col-lg-6 col-md-12 ps-5">
                       <div class="image contact overflow-hidden h-100 mt-auto">
                            <img src="./assests/images/contact-img.png" class="img-responsive object-contain effect lazyload" data-src="./assests/images/contact-img.png" alt="contact img"/>
                       </div>
                   </div>
               </div>   
          </div>
        </section>
         <!--//contact us--> 


        <?php include('components/footer.php');?>


      </div>

        <!--script-->
        <!------------------------------ JQuery ------------------------------------>
        <script type="text/javascript" src="./assests/js/jquery-3.6.0.min.js"></script>
        <!------------------------------ // JQuery --------------------------------->
        <!------------------------------ Bootstrap --------------------------------->
        <script type="text/javascript" src="./assests/js/bootstrap.min.js"></script>
        <!------------------------------// Bootstrap ------------------------------->
        <!-------------------------------- Select ---------------------------------->
        <script type="text/javascript" src="./assests/js/select2.min.js"></script>
        <!--------------------------------// Select -------------------------------->
        <!------------------------------- Lazyload --------------------------------->
        <script type="text/javascript" src="./assests/js/lazyload.min.js"></script>
        <!------------------------------// Lazyload -------------------------------->
        <!------------------------------- Splitting -------------------------------->
        <script type="text/javascript" src="./assests/js/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="./assests/js/TweenMax.min.js"></script>
        <script type="text/javascript" src="./assests/js/splitting.min.js"></script>
        <!-----------------------------// Splitting -------------------------------->
        <!---------------------------------- Wow ----------------------------------->
        <script type="text/javascript" src="./assests/js/wow.min.js"></script>
        <!--------------------------------// Wow ----------------------------------->
        <!---------------------------------- Wow ----------------------------------->
        <script type="text/javascript" src="./assests/js/wow.min.js"></script>
        <!--------------------------------// Wow ----------------------------------->
        <!------------------------------- Main ------------------------------------->
        <script type="text/javascript" src="./assests/js/main.js"></script>
        <!-------------------------------// Main ----------------------------------->
        <!--//script-->
        
    </body>
</html>