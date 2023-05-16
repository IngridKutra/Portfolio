<?php
/*
Template Name: Landing Page
*/


function my_theme_styles() {
  wp_enqueue_style( 'landing-page-style', get_template_directory_uri() . '/landing-page-style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_styles' );

get_header(); ?>

<div id="landing-page">


  <section id="hero" class="section">
  <div class="left_corner"></div>
  <div class="all_text_landing_page">
  <h1><svg
   width="92.656258mm"
   height="12.468906mm"
   viewBox="0 0 92.656258 12.468907"
   version="1.1"
   id="svg5"
   xmlns:xlink="http://www.w3.org/1999/xlink"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:svg="http://www.w3.org/2000/svg">
  <defs
     id="defs2">
    <linearGradient
       id="linearGradient2807">
      <stop
         style="stop-color:#ffffff;stop-opacity:1;"
         offset="0"
         id="stop2805" />
    </linearGradient>
    <pattern
       patternUnits="userSpaceOnUse"
       width="2"
       height="1"
       patternTransform="translate(0,0) scale(10,10)"
       id="Strips1_1">
      <rect
         style="fill:black;stroke:none"
         x="0"
         y="-0.5"
         width="1"
         height="2"
         id="rect1825" />
    </pattern>
    <linearGradient
       xlink:href="#linearGradient2807"
       id="linearGradient227"
       gradientUnits="userSpaceOnUse"
       x1="-115.72073"
       y1="96.162605"
       x2="-23.329472"
       y2="96.162605" />
  </defs>
  <g
     id="layer1"
     transform="translate(115.85323,-89.928155)">
    <text
       xml:space="preserve"
       style="font-size:12.7px;fill:url(#Strips1_1);fill-opacity:1;stroke:url(#linearGradient227);stroke-width:0.265;"
       x="-116.25403"
       y="99.709679"
       id="text113"><tspan
         id="tspan111"
         style="font-size:12.7px;fill:none;fill-opacity:1;stroke:url(#linearGradient227);stroke-width:0.265;stroke-linecap:round;"
         x="-115"
         y="99.44">web developer</tspan></text>
  </g>
</svg></h1>
    <div class="container">
    <div class="front_page_widget">
<div><?php dynamic_sidebar( 'new-widget-area' ); ?></div>
<div class="just_a_line"></div>
  <!--     <a href="#work" class="btn btn-primary">View My Work</a> -->
  </div>
    </div> 
    </div> 
     
        <button class="show-form">Let's Talk!</button>
        <button class="hide-form" style="display: none;">X</button>
       <div class="form">
        <?php echo do_shortcode('[wpforms id="123" title="true"]'); ?>
        </div>
        
        
  </section>
	
	  <section id="about" class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
           <h4><i class="fa-solid fa-wand-magic-sparkles"></i> Web Developer</h4>
          <p>I will use my expertise in web development to bring your vision to life. With a strong foundation in coding and a passion for innovation, I will create a website that exceeds your expectations.</p>
        </div>
        <div class="col-md-5">
			<h4><i class="fa-solid fa-code"></i> Front-end Developer</h4>
			<p>I will craft a seamless and responsive user interface that will keep your users engaged and delighted. With a focus on usability and design, I will ensure that your website is not only visually stunning, but also easy to navigate.</p>
			  </div>
			  <div class="col-md-5">
			<h4><i class="fa-solid fa-swatchbook"></i> UI/UX  Designer</h4>
			<p>I will use my creativity and expertise in user interface and user experience design to create an experience that will leave a lasting impression on your users. </p>
        </div>
      </div>
    </div>
  </section>

  <section id="work" class="section">
	  <div class="projects-text-block">
		     <a href="https://ingridkutra.com/projects/"><h3 class="work-title">Projects</h3></a>
       <p>Throughout my experience as a web developer, I have worked on a variety of projects that demonstrate my skills in different areas. 
        Some of these projects include building a RESTful API using Node.js and MongoDB, creating a plugin for WooCommerce to help sellers manage their products more efficiently, 
        and developing a WordPress plugin for managing orders in a WooCommerce store. I have also worked on projects involving HTML, CSS, JavaScript, and PHP, demonstrating my proficiency in these foundational web development technologies. 
        Additionally, I have worked on a project called Paprika, which is a React application. 
        This project gave me an opportunity to further enhance my skills in front-end development, 
        particularly in React.js. Feel free to visit <a href="https://github.com/IngridKutra">my GitHub profile</a> to learn more about the projects I have worked on.</p>
		 
	  </div>
 
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-5">
        <?php echo do_shortcode('[foogallery id="114"]'); ?> 
      </div>
    </div>
		</div>
  </section>
	
	  <section id="skills" class="section">
	  <div class="skills-text-block">
		     <a href="https://ingridkutra.com/skills/"><h3 class="skills-title">Skills</h3></a>
		  <p> I have acquired a range of valuable skills throughout my career. My expertise in wordpress, php, JavaScript, React, Redux, Node.js, WooCommerce, Mongodb,  
		  wpforms, elementor, git, figma, and microsoft azure enables me to tackle a diverse array of web development projects with ease. 
		  Whether it's building responsive web applications or creating stunning websites and online stores, 
		  I am confident in my ability to deliver high-quality results. I have a passion for keeping up with the latest trends and technologies, and I believe that my skills will continue to grow and evolve over time.</p>
		  
	  </div>
 
    <div class="container">
      <div class="row">
        <div class="skills-gallery">
        <?php echo do_shortcode('[foogallery id="70"]'); ?> 
      </div>
    </div>
		</div>
  </section>





</div>

<?php get_footer(); ?>