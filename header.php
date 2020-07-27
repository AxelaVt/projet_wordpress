<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="author" content="Alexa Vermenot">
    <title>Binotheme</title>
    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<div class="container">
  <body class="home blog logged-in admin-bar no-customize-support">
    <nav class="navbar navbar-expand-md navbar-light mynav">
      <a class="navbar-brand" href="index.php">
      <img src="<?php echo get_template_directory_uri(); ?>/Images/logo.png" class="d-inline-block align-top img-fluid">
      </a>
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
              <a class="nav-link" href="#">PRICING</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">TEAM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">BLOG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTACT</a>
            </li>
          </ul>
        </div>
      </div>
  </nav>
</div>
