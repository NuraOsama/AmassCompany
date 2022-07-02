<?php $activePage = basename($_SERVER['PHP_SELF']);?>

<!--news feed-->
<section class="newsfeed-sec  <?= ($activePage == 'articles.details.php') ? 'related-articles':''; ?> sec">
    <div class="container">
    <?php
    if ($activePage == 'index.php') {
         echo' <div class="head text-center mb-5 pb-5">
             
                <h4 class="f-27 text-d-blue text-uppercase effect mb-4">News Feed</h4>
                <p class="f-21  text-d-gray text-center effect w-60 mx-auto">
                    Start working with amas that can provide everything you
                    connect. Dummy text is text that is used in the publishing
                </p>
            </div>';
    }
    else if($activePage == 'article-details.php') {

      echo' <div class="head text-start effect mb-5 pb-2">
             
              <h4 class="f-27  text-blue text-uppercase">Related Articles</h4>

            </div>';

    }
    ?>

    <div class="row">
            
        <?php   $feedimagesname = ['newsfeed-img.1.png','newsfeed-img.2.png','newsfeed-img.3.png','newsfeed-img.1.png','newsfeed-img.2.png','newsfeed-img.3.png','newsfeed-img.1.png','newsfeed-img.2.png','newsfeed-img.3.png'];
                $imagename = ['newsfeed-img.1.png','newsfeed-img.2.png','newsfeed-img.3.png'];
              
          if ($activePage == 'news-feed.php') {
             for ($i = 0; $i <= 8 ; $i ++) {
            echo "
            <div class='col-lg-4  col-md-6 col-sm-12 mb-4'>
                <a  href='article-details.php' class='content newsfeed h-100 d-block wow slideInUp' wow-data-delay='0.15s' wow-data-duration='0.15s'>
                    <div class='image overflow-hidden'>
                     <img src='./assests/images/$feedimagesname[$i]' class='img-responsive h-210 object-fit effect lazyload' data-src='./assests/images/$feedimagesname[$i]' alt='news feed img'/>
                       
                    </div>
                    <div class='box position-relative mt-3 p-4'>
                        <div class='categorie position-absolute'>
                            <span class='f-14 text-uppercase'>Catégorie 1</span>
                        </div>
                        <div class='head mb-3'>
                          <h4 class='f-19 text-d-blue webkitline-3'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                       </div>
                       <div class='paragh'>
                         <p class='f-14 text-brown webkitline-6 mb-0'>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                              Purus in aliquam duis facilisis feugiat sapien malesuada 
                              pretium tristique. Convallis hac sodales pretium praesent 
                              sceleri.Lorem ipsum dolor sit amet, consectetur sodales 
                             pretium praesent sceleri.
                         </p>
                      </div>
                    </div>
                </a>
            </div>
            ";
        }
      }
      else{

        for ($i = 0; $i <= 2; $i ++) {
        echo "
            <div class='col-lg-4  col-md-6 col-sm-12 mb-4'>
                <a  href='article-details.php' class='content newsfeed h-100 d-block wow slideInUp' wow-data-delay='0.15s' wow-data-duration='0.15s'>
                    <div class='image overflow-hidden'>
                     <img src='./assests/images/$imagename[$i]' class='img-responsive h-210 object-fit effect lazyload' data-src='./assests/images/$imagename[$i]' alt='news feed img'/>
                       
                    </div>
                    <div class='box position-relative  mt-3 p-4'>
                       <div class='categorie position-absolute '>
                          <span class='f-14 text-uppercase'>Catégorie 1</span>
                        </div>
                        <div class='head mb-3'>
                          <h4 class='f-19 text-d-blue webkitline-3'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                       </div>
                       <div class='paragh'>
                         <p class='f-14 text-brown webkitline-6 mb-0'>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                              Purus in aliquam duis facilisis feugiat sapien malesuada 
                              pretium tristique. Convallis hac sodales pretium praesent 
                              sceleri.Lorem ipsum dolor sit amet, consectetur sodales 
                             pretium praesent sceleri.
                         </p>
                      </div>
                    </div>
                </a>
            </div>
            ";
        }
      }
        ?>      
    </div>
    
        <?php
        if ($activePage == 'index.php') {
          echo'  
            
               <div class="button mt-6">
                  <a href="news-feed.php" class="btn btn-primary mx-auto">
                       <span class="icon">
                         <i class="fa fa-tag" aria-hidden="true"></i>
                      </span>
                      
                          View All Articles

                  </a>
               </div>
            
           ';
        }

       else if ($activePage == 'news-feed.php'){

          echo'  
            <div class="button mt-6">
               <a href="." class="btn btn-primary mx-auto">
                    <span class="icon">
                      <i class="fa fa-tag" aria-hidden="true"></i>
                   </span>
                   
                         Load More Artices
                     
               </a>
            </div>
         ';

        }
        ?>

    </div>
</section>
<!--//news feed-->