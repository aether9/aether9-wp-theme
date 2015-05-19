			<div id="right_news">
			<h2><a href="<?php bloginfo('wpurl'); ?>/news/">aether news</a></h2>
					<ul class="community_news txt">
						<?php global $post; // 
					//
					// *****************
					//  RECENT NEWS
					// *****************
						$postslist = get_posts('category_name=news&numberposts=5&orderby=date');
						foreach ($postslist as $post) : 
						setup_postdata($post)
						?> 
						<li><span class="date"><?php the_time('d-M-y'); ?>:</span>&nbsp;<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br/>
						<!--<?php the_excerpt(); ?>-->
						</li>
						<?php endforeach; ?>
					</ul>
			</div><!--#right_news-->
			<div id="right_community">
			<h2><a href="<?php bloginfo('wpurl'); ?>/community/">community news</a></h2>
					<ul class="community_news txt">
						<?php global $post; // 
					//
					// *****************
					//  COMMUNITY NEWS
					// *****************
						$postslist = get_posts('cat=7&numberposts=5&orderby=date');
						foreach ($postslist as $post) : 
						setup_postdata($post)
						?> 
						<li><span class="date"><?php the_time('d-M-y'); ?>:</span>&nbsp;<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br/>
						<!--<?php the_excerpt(); ?>-->
						</li>
						<?php endforeach; ?>
					</ul>
			</div><!--#right_community-->
			
			<div id="right_events">
			<h2><a href="<?php bloginfo('wpurl'); ?>/performances/">recent events</a></h2>
					<ul class="community_news txt">
						<?php global $post; // 
					//
					// *****************
					//  PAST EVENTS
					// *****************
						$postslist = get_posts('category_name=archives&numberposts=10&orderby=date');
						foreach ($postslist as $post) : 
						setup_postdata($post)
						?> 
						<li><span class="date"><?php the_time('d-M-y'); ?>:</span>&nbsp;<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br/>
						<!--<?php the_excerpt(); ?>-->
						</li>
						<?php endforeach; ?>
					</ul>
			</div><!--#right_community-->