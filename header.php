<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet">

    <?php wp_head(); ?>
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1"></div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="/">Stageblog</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center"></div>
        </div>
      </header>
      
      <?php wp_nav_menu( [ 
        'theme_location' => 'menu-main', 
        'container_class' => 'nav-scroller py-1 mb-2', 
        'menu_class' => 'nav d-flex justify-content-between', 
        'link_before' => '<span class="p-2 text-muted">', 
        'link_after' => '</span>' 
      ] ); ?>

        <?php if( is_front_page() ): ?>
            <?php $featured_posts = get_posts( array( 'post_type' => 'post', 'posts_per_page' => 1 ) ); ?>

            <?php foreach( $featured_posts as $featured_post ) { ?>
            <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic"><?php echo $featured_post->post_title; ?></h1>
                    <p class="lead my-3"><?php echo $featured_post->post_content; ?></p>
                    <p class="lead mb-0"><a href="<?php echo get_permalink( $featured_post->ID ); ?>" class="text-white font-weight-bold">Continue reading...</a></p>
                </div>
            </div>
            <?php } ?>
        <?php endif; ?>

      
    </div>