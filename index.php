
<?php include_once('header.php');?>
<?php
  //print_r($_SESSION);
?>

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="images/design1" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Strathfield Barber Shop</h1>
                <p>We do the best and reliable haircutting and other services for both male and female. Our shop is located in strathfield.</p>
                <?php if(!$isLoggedIn):?>
                <p><a class="btn btn-lg btn-secondary" href="signup.php" role="button">Sign up</a></p>
                <?php endif;?>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="images/design2" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Strathfield Barber Shop</h1>
                <p>We do the best and reliable haircutting and other services for both male and female. Our shop is located in strathfield.</p>
                <?php if(!$isLoggedIn):?>
                <p><a class="btn btn-lg btn-secondary" href="signup.php" role="button">Sign up</a></p>
                <?php endif;?>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="images/design3" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Strathfield Barber Shop</h1>
                <p>We do the best and reliable haircutting and other services for both male and female. Our shop is located in strathfield.</p>
                <?php if(!$isLoggedIn):?>
                <p><a class="btn btn-lg btn-secondary" href="signup.php" role="button">Sign up</a></p>
                <?php endif;?>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>



      <div class="container marketing">

        <!-- Services columms -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="images/service1" alt="Generic placeholder image" width="240" height="240">
            <h2>Hair Cutting</h2>
            <p>Fabulous Hair cutting services create your own design and let us know what you want and how you want we make it perfect for you.</p>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="images/service2" alt="Generic placeholder image" width="240" height="240">
            <h2>Beard Shaving</h2>
            <p>Fabulous Beard cutting services create your own design and let us know what you want.</p>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="images/service3" alt="Generic placeholder image" width="240" height="240">
            <h2>Cream & Shampoo</h2>
            <p>With our special shampoo it will give a decent aroma to your hair and best smoothness and shape to your hair.</p>
          </div>
        </div><!-- service completed -->


        <!-- barber features -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Crew Cut</h2>
            <p class="lead">A crew cut is a type of haircut in which the upright hair on the top of the head is cut relatively short, graduated in length from the longest hair that forms a short pomp at the front hairline to the shortest at the back of the crown so that in side profile, the outline of the top hair approaches the horizontal.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="images/feat2.jpg">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Beard Shaving</h2>
            <p class="lead">A man is called clean-shaven if he has had his beard entirely removed.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="images/feat1.jpg">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Beard Trimming</h2>
            <p class="lead">Trimming gives the beard its shape, and a beard without a shape is just hair protruding from the face. If you follow the proper way to trim a beard, you'll be aiming for an even length all over, and a proper beard neckline, cheekline, mustache and lipline.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto"src="images/feat3.jpg">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- end feat -->

      </div><!-- close container -->


<?php include_once('footer.php');?>
