<?php 
/**
 * Template Name: Skills template
 */
?>

<?php
get_header();
?>

<main>
  <div class="back_icon">
	  <i class="fa fa-light fa-arrow-left" style="color: #144f53;"></i><?php dynamic_sidebar( 'back_button' ); ?>
	</div> 
<div >

<?php

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
endif;
?>

</div>

</main>

<?php
get_footer();
?>
