<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

  <?php wp_head(); ?>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></h1>
          <h2><?php bloginfo('description'); ?></h2>
        </div>
      </div>
      <div id="menubar">
        <?php 
        wp_nav_menu( array(
          'theme_location'  =>  'primary',
          'container'       =>  '',
          'container_class' => '',
          'container_id'    => '',
          'menu_id'         => 'menu',
        ));
        ?>
      </div>
    </div>