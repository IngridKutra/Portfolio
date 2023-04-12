<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/31e26b63cc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	
    <title>web developer - Ingrid Kutra</title>
    <?php wp_head(); ?>

</head>
<header>
<nav class="navbar navbar-expand-md navbar-light">
  <div class="container-fluid">
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="ms-auto">
        <ul class="navbar-nav d-md-none " id="navBar">
          <li class="nav-item ms-auto">
            <a class="nav-link" href="#"><?php wp_nav_menu( 'main menu' ); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link ms-auto" href="#"><?php dynamic_sidebar( 'github_icon' ); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link ms-auto" href="#"><?php dynamic_sidebar( 'email_icon' ); ?></a>
          </li>
        </ul>
        <ul class="navbar-nav d-none d-md-flex">
          <li class="nav-item" >
            <a class="nav-link"  href="#"><?php dynamic_sidebar( 'github_icon' ); ?></a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="#"><?php dynamic_sidebar( 'email_icon' ); ?></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>




</header>
<body >

