<?php 

/**
* Template Name: Launcher Page 
*/
?>

<?php get_header(); 

$placeholder_text = get_post_meta(get_the_ID(), "placeholder_text", true);
$btn_label = get_post_meta(get_the_ID(), "btn_label", true);
$meta_text = get_post_meta( get_the_ID(), "meta_text", true );
?>

	<aside id="fh5co-aside" role="sidebar" class="home-img text-center">
		<h1 id="fh5co-logo"><a href="<?php echo site_url(); ?>"><?php bloginfo("name"); ?></a></h1>
	</aside>

	<div id="fh5co-main-content">
		<div class="dt js-dt">
			<div class="dtc js-dtc">
				<div class="simply-countdown-one animate-box" data-animate-effect="fadeInUp"></div>

				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-lg-7">
								<div class="fh5co-intro animate-box">
									<?php while(have_posts()): the_post() ?>
									<h2><?php the_title(); ?></h2>
									<?php the_content(); 
									
									endwhile; ?>
								</div>
							</div>
							
							<div class="col-lg-7 animate-box">
								<form action="#" id="fh5co-subscribe">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="<?php echo esc_attr($placeholder_text); ?>">
										<input type="submit" value="<?php echo esc_attr($btn_label); ?>" class="btn btn-primary">
										<p class="tip"><?php echo esc_html($meta_text); ?></p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
					
			</div>
		</div>

<?php get_footer(); ?>

