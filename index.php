<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web developer - Ingrid Kutra</title>
</head>
<body>
    
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

</body>
</html>

