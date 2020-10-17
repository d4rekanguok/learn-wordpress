<?php get_header(); ?>

<h1>Single Page Hello</h1>

<?php
// Start the Loop.
while ( have_posts() ) :
  the_post();

  the_title('<h1>','</h1>');
  the_content();

  if ( is_home() ) {
    printf( '<h1>Hi</h1>' );
  }
  // get_template_part( 'template-parts/content/content', 'page' );

endwhile; // End the loop.
?>

<?php get_footer(); ?>