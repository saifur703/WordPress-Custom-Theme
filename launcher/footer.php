<div id="fh5co-footer">
			<div class="row">
				<div class="col-md-6">
					<!-- <ul id="fh5co-social">
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-instagram"></i></a></li>
						<li><a href="#"><i class="icon-google-plus"></i></a></li>
						<li><a href="#"><i class="icon-pinterest-square"></i></a></li>
                    </ul> -->
                    
                    <?php if(is_active_sidebar("footer_left")){
                        dynamic_sidebar("footer_left");
                    } ?>
				</div>
				<div class="col-md-6 fh5co-copyright">

                    <?php if(is_active_sidebar("footer_right")){
                        dynamic_sidebar("footer_right");
                    } ?>
					<!-- <p>Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.com" target="_blank">Unsplash</a></p> -->
				</div>
			</div>
		</div>
		
	</div>
	

		<?php wp_footer(); ?>
	</body>
</html>