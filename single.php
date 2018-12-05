<?php get_header(); ?>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-12 blog-main">
            <?php if( have_posts() ): ?>
                <?php while( have_posts() ): the_post(); ?>    
                    <div class="blog-post">
                        <h2 class="blog-post-title"><?php the_title(); ?></h2>
                        <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

                        <p><?php the_category( ', ' ); ?></p>

                        <?php the_content(); ?>
                    </div><!-- /.blog-post -->
                <?php endwhile; ?>
            <?php endif; ?>

        </div><!-- /.blog-main -->

      </div><!-- /.row -->

    </main><!-- /.container -->

<?php get_footer(); ?>