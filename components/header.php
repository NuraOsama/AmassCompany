   
<?php $activePage = basename($_SERVER['PHP_SELF']);?>
   <!--header-->
   <header>
        <div class="container">
           <nav class="navbar navbar-expand-lg navbar-light">          
               <a class="navbar-brand" href="index.php">
                  <img src="./assests/images/logo.svg" class="img-responsive lazyload" data-src="./assests/images/logo.svg" alt="logo img"/>
               </a>
               <button class="navbar-toggler" type="button">
                 <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse">
                 <ul class="navbar-nav mx-auto">
                   <li class="nav-item">
                     <a href="index.php" class="nav-link text-uppercase <?= ($activePage == 'index.php') ? 'active':''; ?>">
                        Home
                     </a>
                   </li>
                   <li class="nav-item">
                     <a href="jobs.php" class="nav-link text-uppercase <?= ($activePage == 'jobs.php' || $activePage == 'job-details.php') ? 'active':''; ?>" >
                        Jobs
                     </a>
                   </li>
                   <li class="nav-item">
                      <a href="news-feed.php" class="nav-link text-uppercase <?= ($activePage == 'news-feed.php' || $activePage == 'article-details.php' ) ? 'active':''; ?>" >
                        News Feed
                      </a>
                   </li>
                   <li class="nav-item">
                      <a href="about-us.php" class="nav-link text-uppercase <?= ($activePage == 'about-us.php') ? 'active':''; ?>">
                        About us
                      </a>
                   </li>
                   <li class="nav-item">
                      <a href="contact-us.php" class="nav-link text-uppercase <?= ($activePage == 'contact-us.php') ? 'active':''; ?>" >
                         Contact us
                      </a>
                   </li>
                 </ul>
                 <div class="navbar-nav navbar-side">
                   <a href="." class="nav-link lang lang-en">
                      <img src="./assests/images/english-flag.svg" class="img-responsive lazyload" data-src="./assests/images/english-flag.svg" alt="flag icon img"/>           
                   </a>
                   <a href="." class="nav-link lang lang-ar">
                       <img src="./assests/images/arabic-flag.svg" class="img-responsive lazyload" data-src="images/arabic-flag.svg" alt="flag icon img"/>
                   </a>
                 </div>
               </div>
              </nav>  
        </div>
   </header>
   <!--//header-->