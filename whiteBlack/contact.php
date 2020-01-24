<?php 

/**
*
* Template Name: Contact Page
**/

get_header(); ?>
    <div id="site_content">
    
      <div class="sidebar">
      <?php 
          if(is_active_sidebar("sidebar")) {
            dynamic_sidebar("sidebar");
          }
        ?>
        <?php 
          if(is_active_sidebar("sidebar2")) {
            dynamic_sidebar("sidebar2");
          }
        ?>
        
      </div>
      <div id="content">

      <?php while(have_posts(  )): the_post(); ?>

          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
      <?php  endwhile;?>
        
      </div>
    </div>
    <?php get_footer( ); ?>