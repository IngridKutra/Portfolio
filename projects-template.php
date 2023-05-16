<?php 
/**
 * Template Name: Projects template
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

<div class="work-text-block">
		     <h3 class="work-title">Projects</h3>
		  
			  <p>Throughout my experience as a web developer, I have worked on a variety of projects that demonstrate my skills in different areas. 
        Some of these projects include building a RESTful API using Node.js and MongoDB, creating a plugin for WooCommerce to help sellers manage their products more efficiently, 
        and developing a WordPress plugin for managing orders in a WooCommerce store. I have also worked on projects involving HTML, CSS, JavaScript, and PHP, demonstrating my proficiency in these foundational web development technologies. 
        Additionally, I have worked on a project called Paprika, which is a React application. 
        This project gave me an opportunity to further enhance my skills in front-end development, 
        particularly in React.js. Feel free to visit <a href="https://github.com/IngridKutra">my GitHub profile</a> to learn more about the projects I have worked on.</p>
        
		  </div>
		  
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
