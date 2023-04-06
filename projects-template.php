<?php 
/**
 * Template Name: Projects template
 */
?>

<?php
get_header();
?>

<main>
   
<div id="mainPost">

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
