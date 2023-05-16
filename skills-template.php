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

<div class="skills-text-block">
		     <h3 class="skills-title">Skills</h3>
		  
			<p> I have acquired a range of valuable skills throughout my career. My expertise in wordpress, php, JavaScript, React, Redux, Node.js, WooCommerce, Mongodb,  
		  wpforms, elementor, git, figma, and microsoft azure enables me to tackle a diverse array of web development projects with ease. 
		  Whether it's building responsive web applications or creating stunning websites and online stores, 
		  I am confident in my ability to deliver high-quality results. I have a passion for keeping up with the latest trends and technologies, and I believe that my skills will continue to grow and evolve over time.</p>
		  
		  </div>
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
