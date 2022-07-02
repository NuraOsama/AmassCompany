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

      <!-- articles details -->

         <section class="article-details-sec sec mb-0">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="content">
                        <div class="image rounded effect-image mb-5">
                           <img src='./assests/images/newsfeed-img.2.png' class='img-responsive rounded object-fit  lazyload' data-src='./assests/images/newsfeed-img.2.png' alt='news feed img'/>
                        </div>
                        <div class="categorie mb-4 pt-3 overflow-hidden">
                            <span class="f-14 text-uppercase d-block effect">Catégorie 2</span>
                        </div>
                        <div class="head mb-4 pt-2">
                           <h4 class="f-27  text-d-blue effect">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing.</h4>
                        </div>
                        <div class="paragh pt-3">
                        <?php                   
                             for ($i = 0; $i <= 2; $i ++) {
                              echo '
                              <p class="f-21 text-brown  mb-4 pb-3">
                                  Lorem Ipsum is simply dummy text of the printing and typesetting 
                                  industry. Lorem Ipsum has been the industrys standard dummy text
                                  ever since the 1500s, when an unknown printer took a galley of 
                                  type and scrambled it to make a type specimen book. It has survived
                                  not only five centuries, but also the leap into electronic typesetting,
                                  remaining essentially unchanged. It was popularised in the 1960s 
                                  with the release of Letraset sheets containing Lorem Ipsum passages, 
                                  and more recently with desktop publishing software like Aldus PageMaker 
                                  including versions of Lorem Ipsum.
                              </p>
                            ';
                            }
                      ?>
                        </div>

                     </div>   
                  </div>
               </div>
            </div>
         </section>

      <!-- //articles details -->

       <?php include('components/newsfeed.php');?>

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
        <!---------------------------------- Wow ----------------------------------->
        <script type="text/javascript" src="./assests/js/wow.min.js"></script>
        <!--------------------------------// Wow ----------------------------------->
        <!------------------------------- Main ------------------------------------->
        <script type="text/javascript" src="./assests/js/main.js"></script>
        <!-------------------------------// Main ----------------------------------->
        <!--//script-->

   

   </body>
   </html>