<?php
/*
Template Name: Community
*/
?>

<?php 

 get_header(); ?>

	<div id="content_box" class="index">	
		<div id="left_box" class="index">
			<div id="content" class="index">
<?php 		//The Query
				query_posts('category_name=community-news&numberposts=5&orderby=date');
			if (have_posts()) : ?>
		
<?php 
				while (have_posts()) : the_post(); ?>
			<div class="block">
				<div class="thumb"><a href="<?php the_permalink(); ?>"><?php bxw_get_thumbs($post->ID); ?><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mire09.jpg" /></a></div>
				<div class="txt"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<span class="date">Published: <?php the_time('d-M-y'); ?></span>
				<?php the_excerpt(); ?></div>
			</div>
									
<?php endwhile; ?>
							
<?php else : ?>		
				<div class="content_inner">
					<h2 class="top">There's nothing here.</h2>
					<div class="format_text">
						<p class="center">Sorry, but you are looking for something that isn't here.</p>
						<?php get_search_form(); ?>
					</div>
				</div>
<?php endif; ?>
	
			</div><!--#content-->
		</div><!--#left_box-->
		
		<div id="right_box" class="index community">
			<h2>The Aether Team</h2>
		<ul>
		<?php
				$postslist = get_posts('category_name=performers&numberposts=100&orderby=title&order=ASC');
 				foreach ($postslist as $post) : 
						setup_postdata($post);
						$post_id = get_post($post->ID); // get current post
						$slug = $post_id->post_name; // define slug as $slug
					 ?><div class="performer-box"><div class="performer-img"><a href="<?php bloginfo('wpurl'); ?>/performers/<?php echo $slug; ?>"><?php bxw_get_thumbs($post->ID); ?><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mire12.jpg" /></a></div>
				<div class="performer-txt"><a href="<?php bloginfo('wpurl'); ?>/performers/<?php echo $slug; ?>"><?php the_title(); ?></a>
				<?php the_excerpt(); ?></div></div>
					 <?php endforeach; ?>
		</ul>
		</div><!--#right_box-->
	</div><!--#content_box-->

<?php get_footer(); ?>