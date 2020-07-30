<?php get_header(); ?>


<div class="container h-100 mt-5 p-5" id="single">
  <!-- <main class="wrap"> -->
    <!-- <section class="content-area content-full-width"> -->
    <div class="d-flex flex-column" id="article">


      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- <article class="article-full"> -->
        <header>
          <img src="" alt="">
          <?php the_post_thumbnail(); ?>
          <h1 class="text-center p-5"><?php the_title(); ?></h1>
          <span>Publié le: <?php the_date();"  " ?>, par: <?php the_author(); ?></span>
          <p></p>
        </header>
       <p class=""><?php the_content(); ?></p>
      <!-- </article> -->
      <?php endwhile; else : ?>
      <article>
        <p>Sorry, no post was found!</p>
      </article>
      <?php endif; ?>
    </div>
    <!-- </section> -->
  <!-- </main> -->
  <p>Dans la catégorie : <?php the_category(); ?></p>
  <p><?php the_tags(); ?></p>
  <a href="<?php echo home_url( '/' ); ?>"><button type="button" class="btn btn-black">Home</button></a>

</div>
<?php get_footer(); ?>
