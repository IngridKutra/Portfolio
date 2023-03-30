<?php 
/**
 * Template Name: The main template file
 */
?>

 <?php
 get_header();
 ?>

<main>
   
<div class="front_page_main_div">

<div class="left_corner"></div>
<div class="all_text">
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
<div class="front_page_widget">
<div><?php dynamic_sidebar( 'new-widget-area' ); ?></div>
<div class="just_a_line"></div>
</div>
</div>

<div class="right_corner"></div>




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