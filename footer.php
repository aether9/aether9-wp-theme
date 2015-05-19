<div id="footer">
		<div id="footer_right" class="triad">
			<h2>Get the aether feeds</h2>
			<ul>
			<li><a href="<?php bloginfo('wpurl'); ?>/?cat=3&amp;feed=rss2" class="RSS-feed">aether9 newsfeed</a></li>
			<li><a href="<?php bloginfo('wpurl'); ?>/?cat=7&amp;feed=rss2" class="RSS-feed">community blog</a></li>
			<li><a href="<?php bloginfo('wpurl'); ?>/?cat=3&amp;feed=rss2" class="RSS-feed">software releases</a></li>
			</ul>
		</div>
		<div id="footer_middle" class="triad">
		<h2><a href="<?php bloginfo('wpurl'); ?>/community/">Some of the Team</a></h2>
		<ul>
		<?php
				$rand_posts = get_posts('category_name=performers&numberposts=3&orderby=rand');
 				foreach( $rand_posts as $post ) :
				setup_postdata($post);
				$post_id = get_post($post->ID); // get current post
				$slug = $post_id->post_name; // define slug as $slug
					 ?><div class="performer-img"><a href="<?php bloginfo('wpurl'); ?>/performers/<?php echo $slug; ?>"><?php bxw_get_thumbs($post->ID); ?><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mire12.jpg" /></a></div>
					<?php  
    					 ?>
				<div class="performer-txt"><a href="<?php bloginfo('wpurl'); ?>/performers/<?php echo $slug; ?>"><?php the_title(); ?></a>
				<?php the_excerpt(); ?></div>
					 <?php endforeach; ?>
		</ul>
		</div>
		<div id="footer_left" class="triad">
		
				<h2>Get the aether newsletter</h2>
				<p>Subscribe to keep up with our activities.</p>
				
			<?php // the NEWSLETTER FORM
					
					$widgetNL = new WYSIJA_NL_Widget(true);
					echo $widgetNL->widget(array('form' => 2, 'form_type' => 'php'));
					 
					 ?>
		</div>
		<?php wp_footer(); ?>
	</div><!--#footer-->
</div><!--#page-->
</div><!--#container-->
<!--[if lte IE 7]>
<div id="ie_clear"></div>
<![endif]-->

<!-- scripts concatenated and minified via ant build script-->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/mylibs/jquery.colorbox.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/mylibs/scripts.js"></script>
<!-- end scripts-->

<?php wp_footer(); ?>

</body>
</html>