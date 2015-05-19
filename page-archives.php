<?php
/*
Template Name: Archives
*/
?>

<?php 

 get_header(); ?>

	<div id="content_box" class="index">	
		<div id="left_box" class="index">
			<div id="content" class="index">
<?php 		//The Query
				query_posts('category_name=archives&orderby=date&posts_per_page=35');
			if (have_posts()) : ?>
		
<?php 
				while (have_posts()) : the_post(); ?>
			<div class="block">
				<div class="thumb"><a href="<?php the_permalink(); ?>"><?php bxw_get_thumbs($post->ID); ?><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mire04.jpg" /></a></div>
				<div class="txt"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<span class="date bold">Date: <?php the_time('F dS, Y'); ?></span>
				<?php the_excerpt(); ?></div>
			</div>
									
<?php endwhile; ?>
							
<?php else : ?>		
					<h2 class="top">There's nothing here.</h2>
					<div class="format_text">
						<p class="center">Sorry, but you are looking for something that isn't here.</p>
						<?php get_search_form(); ?>
					</div>
<?php endif; ?>
	
			</div><!--#content-->
		</div><!--#left_box-->
		
		<div id="right_box" class="index">
			<?php get_sidebar(); ?>
		</div><!--#right_box-->
	</div><!--#content_box-->

<?php get_footer(); ?>