<html>
<head>
    <title>Stageverslag Carin Hansen</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>



<nav id="navbar">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'main-nav',
        'container_class' => 'main-nav'));
    ?>
</nav>

<script>
  window.onscroll = function() {myFunction()};

  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;

  function myFunction() {
    if (window.pageYOffset > sticky) {
      navbar.classList.add("sticky");
      navbar.classList.remove("not-sticky");
    } else {
      navbar.classList.remove("sticky");
      navbar.classList.add("not-sticky");
    }
  }
</script>


