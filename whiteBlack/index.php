<?php get_header(); ?>
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

          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <?php the_excerpt(); ?>
      <?php  endwhile;?>
        
      </div>
    </div>
    <?php get_footer( ); ?>