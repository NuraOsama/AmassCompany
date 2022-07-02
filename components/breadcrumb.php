<?php $page = $_SERVER['PHP_SELF'];
$currentpage = ucwords(str_replace("-"," ",(basename($page,".php"))));
$currentdir = ucwords(basename(dirname($page)));
$topdir = basename(dirname(dirname($page)));
?>

<!--breadcrumb-->
<section class="breadcrumb-sec position-relative z-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
               <div class="content">
               <div class="head mb-4">
                        <h4 class="f-35 text-white text-center text-capitalize">
                            
                        <?php if ($currentpage == 'Article Details'){ 

                            echo 'news feed';
                        }
                        else if ($currentpage == 'Job Details'){
                          
                          echo 'Jobs';

                        }
                         else{

                            echo $currentpage;
                        
                        }
                        ?>

                        </h4>
                  </div>
               </div>
                <nav style="--bs-breadcrumb-divider: url(../images/angle-icon.png);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                       <li class="breadcrumb-item">
                           <a href="index.php">Home</a>
                      </li>

                      <?php if ($currentpage == 'Article Details'){ 
                           echo '
                             <li class="breadcrumb-item">
                               <a href="news-feed.php">News Feed</a>
                             </li>';
                        }
                       else if ($currentpage == 'Job Details'){ 
                          echo '
                            <li class="breadcrumb-item">
                              <a href="jobs.php">Jobs</a>
                            </li>';
                       }
                      ?>
                      <li class="breadcrumb-item active" aria-current="page"><?php echo $currentpage; ?></li>
                    </ol>
                </nav>
         </div>
    </div>
  </div>
</section>
<!--//breadcrumb-->