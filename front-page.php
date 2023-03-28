<?php 
/**
 * Template Name: The main template file
 */
?>

 <?php
 get_header();
 ?>

<main>
    <div class="left_corner"></div>
<div>
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
endif;
?>
<div class="right_corner"></div>
</div>
</main>


<?php
get_footer();
?>