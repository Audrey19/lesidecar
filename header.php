<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); echo '/style.css?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,700|Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <script>
        ScrollReveal({ reset: true });
    </script>

    <?php wp_head(); ?>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section class="page">
  
<header>
 <img class="logo_black" src="<?php bloginfo('template_url'); ?>/assets/images/logo_bl.png" alt="logo">
  
  <a class="logo_name" href="https://www.lesidecarweb.com"><p>LE SIDECAR</p></a>
  
  <?php wp_nav_menu(array('container_class' => 'menu_container','theme_location' => 'primary' )); ?>   
  
  <?php // outputs a flags list (without languages names) ?><ul class="langue"><?php pll_the_languages(array('show_flags'=>1,'show_names'=>0)); ?></ul>
</header>

<?php wp_nav_menu(array('container_class' => 'menu_container_responsive','theme_location' => 'primary' )); ?>
<?php // outputs a flags list (without languages names) ?><ul class="langue_responsive"><?php pll_the_languages(array('show_flags'=>1,'show_names'=>0)); ?></ul>

<button class="hamburger hamburger--slider" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
</button>