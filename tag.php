<?php 
/**
 * aether9 theme
 */
 get_header(); ?>

	<div id="content_box" class="index">	
		<div id="left_box" class="index">
			<div id="content" class="index">
<?php 		if (have_posts('orderby=date&order=DESC')) : ?>
<?php 
				while (have_posts()) : the_post(); ?>

	<?php // this is the loop, but we don't use it here 
endwhile; ?>
				
<?php else : ?>		
					<h2 class="top">There's nothing here.</h2>
					<div class="format_text">
						<p class="center">Sorry, but you are looking for something that isn't here.</p>
						<?php get_search_form(); ?>
					</div>
<?php endif; ?>
	
	<!-- FIRST LOOP -->
			<?php // source : http://wordpress.org/support/topic/307104
		if ( is_tag() ) {
			$tag = get_query_var('tag');
			$args=array(
				'showposts'=>1,
				'tag' => $tag,
				'orderby' =>date,
				'order'=>ASC //oldest post first
			);
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {?>
			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<h2><?php the_title(); ?><?php edit_post_link('edit post', ' ', ''); ?></h2>
					
					<?php the_content(); ?>
			<?php endwhile;
			}?>
		<?php }?>
	<br/>
	
	<!--the second loop -->
		<?php
		if ( is_tag() ) {
			$tag = get_query_var('tag');
			$tagnr = $wp_query->get_queried_object();
			$tagnumber = $tagnr->count;
			$tagnumberd = ($tagnumber -1); // number of posts minus one;
			$args=array(
				'showposts'=>$tagnumberd, // doesn't show the oldest post...
				'tag' => $tag,
				'orderby' =>date,
				'order'=>DESC // ...newest post on top!
				//'offset'=>1
			);
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {?>
			<h2>Participant in:</h2>
			<ul>
			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<li>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> - <?php the_time('d-M-Y'); ?>
					</li>
			<?php endwhile;
			}?>
			</ul>
		<?php }?>

			</div><!--#content-->
		</div><!--#left_box-->
		
		<div id="right_box" class="index">
			<?php get_sidebar(); ?>
		</div><!--#right_box-->
	</div><!--#content_box-->

<?php get_footer(); ?>