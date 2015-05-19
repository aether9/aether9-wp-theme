<?php 
/**
 * aether9 theme
 */
 get_header(); ?>

	<div id="content_box">	
		<div id="left_box">
			<div id="left_top">

<?php 		//The Query
				query_posts('category_name=featured&posts_per_page=1');
			if (have_posts()) : ?>
		
				<div id="left_featured">
<?php 				//
					// *****************
					//     FEATURED
					// *****************
				while (have_posts()) : the_post(); ?>
					<h1>aether9! announcements</h1>
					<h2 <?php post_class() ?> >
					<a href="<?php the_permalink() ?>" rel="bookmark"><?php bxw_get_mediumimg($post->ID); ?></a>
					
					<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<div class="format_text txt">
					<?php the_content('[read&nbsp;more...]'); ?>
					</div>
<?php endwhile; ?>
				</div><!--END#left_featured -->		
<?php else : ?>		
				Sorry, but you are looking for something that isn't here.
<?php endif;  //end of the Loop
//Reset Query
wp_reset_query(); ?>
	
				<div id="left_future">
					<?php query_posts('category_name=news&offset=-1&posts_per_page=1&orderby=date');
					//
					// *****************
					//  NEWS
					// *****************
					 while (have_posts()) : the_post(); ?>
 					 
   					 <div class="thumb"><a href="<?php the_permalink(); ?>"><?php bxw_get_thumbs($post->ID); ?><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mire04.jpg" /></a></div>
					<div class="txt"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<span class="date"><?php the_time('d-M-y'); ?>&nbsp;&nbsp;&mdash;&nbsp;&nbsp;</span>
					<?php the_content('[read&nbsp;more...]'); ?></div>
						
 					 <?php endwhile;?>
 					 
					
					<h3><a href="<?php bloginfo('wpurl'); ?>/news/">&gt;&gt; more aether news...</a></h3>
				</div><!--END#left_future -->
	
			</div><!--#left_top-->
			
			<div id="left_middle">
				<div id="left_items">
					<?php global $post; // 
					//
					// *****************
					//       ITEMS
					// *****************
					$postslist = get_posts('category_name=items&numberposts=1&orderby=date');
					foreach ($postslist as $post) : 
					setup_postdata($post)
					?> 
					<div id="item-img"><a href="<?php the_permalink() ?>" rel="bookmark"><?php bxw_get_mediumimg($post->ID); ?></a></div>
					<p class="txt"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<?php endforeach; ?></p>
					<h2><a href="<?php bloginfo('wpurl'); ?>/items/">aetheric items</a></h2>
				</div><!--END#left_items -->
				
				<div id="left_recent">
					<h2><a href="<?php bloginfo('wpurl'); ?>/performances/">recent events</a></h2>
					
						<?php global $post; // 
					//
					// *****************
					//  RECENT EVENTS
					// ***************** 
						$postslist = get_posts('category_name=archives&numberposts=5&orderby=date');
						foreach ($postslist as $post) : 
						setup_postdata($post)
						?> 
						<div class="thumb"><a href="<?php the_permalink(); ?>"><?php bxw_get_thumbs($post->ID); ?><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mire09.jpg" /></a></div>
						<div class="txt">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br/>
						Date: <?php the_time('F j, Y'); ?>
						</div>
						<?php endforeach; ?>
					
				<h3><a href="<?php bloginfo('wpurl'); ?>/performances/">&gt;&gt; see more events</a></h3>
				</div><!--END#left_recent -->
			</div><!--END#left_middle -->
		</div><!--END#left_box-->
		
		<div id="right_box">
			<div id="right_top">
					<?php query_posts('page_id=2');
					global $more;
					//
					// *****************
					//  ABOUT
					// *****************
					?>
 					 <?php while (have_posts()) : the_post();
 					 $more = 0; ?>
 					 <a href="<?php the_permalink() ?>" rel="bookmark"><h2>about aether9</h2></a>
   					 <a href="<?php the_permalink() ?>" rel="bookmark"><?php bxw_get_mediumimg($post->ID); ?></a>
						<?php the_content('[read&nbsp;more...]'); ?>
 					 <?php endwhile;?>

			</div><!--END#right_top -->
			
			<div id="right_middle">
				<div id="right_download">
					<h2>downloads</h2>
					<ul class="community_news txt">
						<?php global $post; // 
					//
					// *****************
					//  CODE
					// *****************
						$postslist = get_posts('category_name=code&numberposts=1&orderby=date');
						foreach ($postslist as $post) : 
						setup_postdata($post)
						?> 
						<li><span class="date"><?php the_time('d-M-y'); ?>:</span>&nbsp;<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br/>
						<!--<?php the_excerpt(); ?>-->
						</li>
						<?php endforeach; ?>
					</ul>
				</div><!--END#right_download-->
				
				<div id="community_news">
					<h2><a href="<?php bloginfo('wpurl'); ?>/community/">community news</a></h2>
					<ul class="community_news txt">
						<?php global $post; // 
					//
					// *****************
					//  COMMUNITY NEWS
					// *****************
						$postslist = get_posts('cat=7&numberposts=2&orderby=date');
						foreach ($postslist as $post) : 
						setup_postdata($post)
						?> 
						<li><span class="date"><?php the_time('d-M-y'); ?>:</span>&nbsp;<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br/>
						<!--<?php the_excerpt(); ?>-->
						</li>
						<?php endforeach; ?>
					</ul>
				</div><!--END#community_news-->
				
			</div><!--END#right_top -->
			<div id="right_bottom">
				<h2><a href="http://www.flickr.com/groups/aether9/pool/">aetheric activity on flickr...</a></h2>
				<?php 	// *****************
						//     FLICKR
						// *****************
					get_flickrRSS(); ?>
			</div><!--END#right_bottom -->
			
			<div id="right_credits">
				<h2>aether9 is powered by...</h2>
				<div>
				<a href="http://www.bak.admin.ch/themen/kulturfoerderung/00476/01756/02068/index.html?lang=de#sprungmarke0_48" target="_blank"><img class="OFC" src="<?php bloginfo('stylesheet_directory'); ?>/images/OFC_bw.png"/></a>
				<a href="http://giss.tv" target="_blank"><img class="giss" src="<?php bloginfo('stylesheet_directory'); ?>/images/GISS_logo.jpg"/></a>
				<a href="http://n3krozoft.com" target="_blank"><img class="n3kr" src="<?php bloginfo('stylesheet_directory'); ?>/images/n3kr_icon6_100px.jpg"/></a>
				</div>
			</div><!--END#right_credits -->
		</div><!--END#right_box-->

	</div><!--END#content_box-->

<?php get_footer(); ?>