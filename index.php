<?php
  include "header.php";
  define('WP_USE_THEMES', false);
  get_header();
?>

<div class="container">
  <body class="home blog logged-in admin-bar no-customize-support">
    <nav class="navbar navbar-expand-md navbar-light navbar-fixed-top mynav">
      <a class="navbar-brand" href="index.php">
      <img src="<?php echo get_template_directory_uri(); ?>/Images/logo.png" class="d-inline-block align-top img-fluid">
      </a>
       <?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
        <div class="topnav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo home_url( '/' ); ?>">HOME<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#history">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#RecentWork">PORTFOLIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#ourservices">PRICING</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#CaseStudy">TEAM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#StatsBar">CONTACT</a>
            </li>
          </ul>
        </div>
      </div>
  </nav>
</div>

<div class="container-fluid p-0 m-0">
  <section id="home" class="h-100">
     <!-- Page d'accueil -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/Images/homebgwhite.jpg" alt="First slide">
          <!-- C:\wamp64\www\alexa\projet_wordpress\wp-content\themes\Binotheme\Images -->
            <div class="carousel-caption d-none d-md-block pb-0">
              <p class="h-10"> Our Clients Are Our First Priority </p>
                <div class="container w-75">
                  <h1 class="display-1"> <strong><?php bloginfo('name'); ?></strong></h1>
                  <br><br>
                  <div class="container w-25 ">
                    <div class"row">
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="line"> __________ </p>
                        <img src="<?php echo get_template_directory_uri(); ?>/Images/round.png">
                        <p class="line"> __________ </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container w-75">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
                </div>
                <br>
                <div class="button"><button type="button" class="btn btn-outline-secondary">Get Started Now</button>
                  <button type="button" class="btn btn-outline-secondary">Learn More</button>
                </div>
                <div class="justify-content-center align-self-end mt-5 pb-0">
                  <a  id="fleche" href="#Features"><i class="fa fa-arrow-circle-down"></i></a>
                </div>

            </div>
        </div>
      </div>
  </section> <!-- Fin page d'accueil -->

  <section id="Features" class="d-flex align-items-center pb-0"> <!-- Page features -->
    <div class="container-fluid">
      <div class="row d-flex justify-content-around align-items-center flex-wrap h-100">
        <!-- <div class="d-flex justify-content-around wrap"> -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="col-lg-3 col-sm-9 m-0">
            <article class="hovering article-loop">
              <div class="border border-dark mb-4 w-25 mx-auto d-flex justify-content-center">
                <i class="fa-file-text-o"></i>
              </div>
              <div class="text-center">
                <h5><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
              </div>
              <div class="text-center">
                <br>
                <p id="serif"> <?php the_excerpt(); ?>  </p>
                <?php the_author(); ?>
              </div>
            </article>
          </div>
              <?php endwhile; else : ?>
            <article>
              <p>Sorry, no posts were found!</p>
            </article>
          <?php endif; ?>


      </div>
    </div>
  </section> <!-- Fin page features -->


  <section id="history" class="d-flex align-items-center pb-0">
  <div class="row mt-5">
      <div class="col-sm-12 col-md-6 mb-4">
      <img src="<?php echo get_template_directory_uri(); ?>/Images/stab1.png">
      </div>
      <div class="col-sm-12 col-md-6">
        <div class=" border-left border-5 border-dark mb-5 pl-4"> <h3> OUR HISTORY </h3> </div>
        <div>
        <p id="sans-serif">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <br><br>
        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' <p>
        </div>
        <button type="button" class="btn btn-danger mt-5">BROWSE OUR WORK</button>
      </div>
  </div>
  </section>
  <section id="ourservices"> <!-- Page Services -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 half-left">
          <div class="container-1 border-right border-5 border-dark">
          <h3 id="h3-1"> OUR SERVICES </h3>
          </div>
          <div class="row-a d-inline">
            <div class="border-1 col-sm-9 mt-5 ">
              <div class="container-2">
                <h5 class="tlepos d-flex justify-content-end">WEB DESIGN</h5>
                <p class="txtpos">Lorem Ipsum is simply dummy text of the printing and tyepesetting industry. Lorem Ip sum has been the industry's standard dummy text ever.</p>
              </div>
            </div>
            <div class="border-1 col-sm-9 mt-5">
              <div class="container-2">
                <h5 class="tlepos d-flex justify-content-end">PRINT DESIGN</h5>
                <p class="txtpos">Lorem Ipsum is simply dummy text of the printing and tyepesetting industry. Lorem Ip sum has been the industry's standard dummy text ever.</p>
              </div>
            </div>
            <div class="border-1 col-sm-9 mt-5">
              <div class="container-2">
                <h5 class="tlepos d-flex justify-content-end">PHOTOGRAPHY</h5>
                <p class="txtpos">Lorem Ipsum is simply dummy text of the printing and tyepesetting industry. Lorem Ip sum has been the industry's standard dummy text ever.</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-sm-4 half-right">
          <div class="container-3">
            <img src="<?php echo get_template_directory_uri(); ?>/Images/servicerightimg.jpg">
              <button type="button" class="btn btn-success btn-circle btn-xl"><a href="#Services"><i class="fa fa-desktop"></i></a></button>
                <button type="button" class="btn-1 btn-success btn-circle btn-xl"><a href="#Services"><i class="fa fa-print"></i></a></button>
                  <button type="button" class="btn-2 btn-success btn-circle btn-xl"><a href="#SERVICES"><i class="fa fa-camera"></i></a></button>
          </div>
        </div>
      </div>
    </div>

  </section>
            <!-- Fin page Services -->
  <hr>
  <br><br><br><br>
  <section id="RecentWork"> <!-- Page Recent Work -->
    <div class="row d-flex justify-content-center">
      <div class="col-sm-5 d-flex justify-content-center">
        <div class="container-4 justify-content-center">
          <h3 id="RWtitle"> RECENT WORKS </h3>
          <p id="sub-title"> It has survived not only five centuries, but also the leap scrambled it to make a type. </p>
            <div class="container-5 d-flex justify-content-center">
              <div class="line-1">
                <div id="circle">
                </div>
                <div class="line-2">
                </div>
              </div>
            </div>
          <br><br><br>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex justify-content-center">
              <li id="breadcrumb-active" class="breadcrumb-item active" aria-current="page">ALL</li>
              <li class="breadcrumb-item"><a href="#RecentWork">PRINT DESIGN</a></li>
              <li class="breadcrumb-item"><a href="#RecentWork">ANIMATION</a></li>
              <li class="breadcrumb-item"><a href="#RecentWork">ART</a></li>
              <li class="breadcrumb-item"><a href="#RecentWork">WEB DESIGN</a></li>
              <li class="breadcrumb-item"><a href="#RecentWork">PHOTOGRAPHY</a></li>
              <li class="breadcrumb-item"><a href="#RecentWork">VIDEO</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <br><br>
  <!-- Images Recent Works -->
  <div class="row">   <!-- 1ere Ligne d'images -->
    <div class="col-sm nopadding">
      <div class="container-6">
        <img src="<?php echo get_template_directory_uri(); ?>/Images/pf1.jpg" alt="Image1" class="imagesRW">
        <div class="overlay">
          <div class="line-3">
          </div>
          <h5>T-Shirt Design</h5>
          <div class="text">
              <p> art / T-shirt </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm nopadding">
      <div class="container-6">
        <img src="<?php echo get_template_directory_uri(); ?>/Images/pf2.jpg" alt="Image2" class="imagesRW">
        <div class="overlay">
          <div class="line-3">
          </div>
          <h5>T-Shirt Design</h5>
          <div class="text">
              <p> art / T-shirt </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm nopadding">
      <div class="container-6">
        <img src="<?php echo get_template_directory_uri(); ?>/Images/pf3.jpg" alt="Image3" class="imagesRW">
        <div class="overlay-1">
          <div class="line-3">
          </div>
          <h5>T-Shirt Design</h5>
          <div class="text">
              <p> art / T-shirt </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm nopadding">
      <div class="container-6">
        <img src="<?php echo get_template_directory_uri(); ?>/Images/pf4.jpg" alt="Image4" class="imagesRW">
        <div class="overlay-1">
          <div class="line-3">
          </div>
          <h5>T-Shirt Design</h5>
          <div class="text">
              <p> art / T-shirt </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">                  <!-- 2eme Ligne d'images -->
    <div class="col-sm nopadding">
      <div class="container-6">
        <img src="<?php echo get_template_directory_uri(); ?>/Images/pf5.jpg" alt="Image5" class="imagesRW">
        <div class="overlay-2">
          <div class="line-3">
          </div>
          <h5>T-Shirt Design</h5>
          <div class="text">
              <p> art / T-shirt </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm nopadding">
      <div class="container-6">
        <img src="<?php echo get_template_directory_uri(); ?>/Images/pf6.jpg" alt="Image6" class="imagesRW">
        <div class="overlay-2">
          <div class="line-3">
          </div>
          <h5>T-Shirt Design</h5>
          <div class="text">
              <p> art / T-shirt </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm nopadding">
      <div class="container-6">
        <img src="<?php echo get_template_directory_uri(); ?>/Images/pf7.jpg" alt="Image7" class="imagesRW">
        <div class="overlay-3">
          <div class="line-3">
          </div>
          <h5>T-Shirt Design</h5>
          <div class="text">
              <p> art / T-shirt </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm nopadding">
      <div class="container-6">
        <img src="<?php echo get_template_directory_uri(); ?>/Images/pf8.jpg" alt="Image8" class="imagesRW">
        <div class="overlay-3">
          <div class="line-3">
          </div>
          <h5>T-Shirt Design</h5>
          <div class="text">
              <p> art / T-shirt </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section> <!-- Fin page Recent Work -->

  <br><br><br><br><br>


  <section id="CaseStudy"> <!-- Page Case Study -->
    <div class="row d-flex justify-content-center">
      <div class="col-sm-5 d-flex justify-content-center">
        <div class="container-4 justify-content-center">
          <h3 id="RWtitle"> CASE STUDY </h3>
          <p id="sub-title"> A brief story about how this process qworks, keep an eye till the end. </p>
            <div class="container-5 d-flex justify-content-center">
              <div class="line-1">
                <div id="circle">
                </div>
                <div class="line-2">
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

  <br><br><br><br><br>

  <div class="row b-5">
    <div class="col-sm-4">
      <img id="imgstudy" src="<?php echo get_template_directory_uri(); ?>/Images/study.jpg">
    </div>
    <div class="col-sm-8">
      <div class="card">
        <span class="hovering">
          <div  id="borderCI" class="border border-dark">
            <i class="fa fa-lightbulb-o mt-3"></i>
          </div>
        <div class="card-body">
          <h5 class="card-title">ACCUMULATE CREATIVE IDEAS</h5>
          <div class="line-4">
          </div>
          <br><br>
          <p class="card-text">Lorem Ipsum is simply dummy text of the printing and tyepesetting industry. Lorem Ip sum has been the industry's standard dummy text ever.Lorem Ipsum is simply dummy text of the printing and tyepesetting industry. Lorem Ip sum has been the industry's standard dummy text ever.</p>
          <a class="btn btn-danger-2 mt-4 shadow rounded">READ MORE</a>
          <div class="container-7">
            <div class="pagination">
              <a href="#" class="active">&nbsp;</a>
              <a href="#">&nbsp;</a>
              <a href="#">&nbsp;</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  </section>

  <section id="StatsBar">
    <div class="row mt-5">
      <div class="card bg-dark text-white vw-100">
    <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/Images/counterbg.jpg" alt="Card image">
    <div class="card-img-overlay">
      <div class="row text-center">
      	        <div class="col">
      	        <div class="counter">
            <i class="fa fa-heart-o fasize"></i>
            <h2 class="timer count-title count-number" data-to="3891" data-speed="2000"></h2>
             <p class="count-text ">User Favourites</p>
          </div>
      	        </div>
                    <div class="col">
                     <div class="counter">
            <i class="fa fa-tag fasize"></i>
            <h2 class="timer count-title count-number" data-to="281000" data-speed="2000"></h2>
            <p class="count-text ">Posts Last 24 Hours</p>
          </div>
                    </div>
                    <div class="col">
                        <div class="counter">
            <i class="fa fa-thumbs-o-up fasize"></i>
            <h2 class="timer count-title count-number" data-to="618" data-speed="2000"></h2>
            <p class="count-text ">Total Posts</p>
          </div></div>
                    <div class="col">
                    <div class="counter">
            <i class="fa fa-star-o fasize"></i>
            <h2 class="timer count-title count-number" data-to="178" data-speed="2000"></h2>
            <p class="count-text ">Campaigns</p>
          </div>
                    </div>
                    <div class="col">
                    <div class="counter">
                <i class="fa fa-bookmark-o fasize"></i>
                <h2 class="timer count-title count-number" data-to="285" data-speed="2000"></h2>
                 <p class="count-text ">Amazing Features</p>
              </div>
                    </div>
               </div>
    </div>
  </div>
  </div>
  </section>
</div>

<?php
include "footer.php";
get_footer()
?>
