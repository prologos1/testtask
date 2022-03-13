<?php get_header(); ?>
<div class="container-fluid">
<?php if( is_home() ) { ?> 
<h1 class="text-center"><?php bloginfo( 'name' ); ?></h1>
<h2><?php //bloginfo( 'description' ); ?></h2>
<?php } ?>
<hr>
<!-- index -->
					<?php if (have_posts()) : ?>	
						<?php while (have_posts()) : the_post(); ?>
						
						<div <?php post_class() ?> class="ml-1 mt-1 px-2" id="post-<?php the_ID(); ?>">
							<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Ссылка на <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							<div class="postdate"><img src="<?php bloginfo('template_url'); ?>/images/date.png" /> <?php the_time('F j, Y') ?> <img src="<?php bloginfo('template_url'); ?>/images/user.png" /> <?php the_author() ?> <?php if (current_user_can('edit_post', $post->ID)) { ?> <img src="<?php bloginfo('template_url'); ?>/images/edit.png" /> <?php edit_post_link('Edit', '', ''); } ?></div>
							
							<div class="entry">
                                <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(200,160), array("class" => "alignleft post_thumbnail")); } ?>
							
  							    <?php 
								 the_content(''); // выводит полностью запись
								 //the_excerpt();  // сминает запись и выводит частично
								?>
								<i><?php the_tags(); ?></i>
                                <div class="readmorecontent">
									<a class="readmore" href="<?php the_permalink() ?>" rel="bookmark" title="Ссылка на <?php the_title_attribute(); ?>">Читать &raquo;</a>
								</div>
							</div>
						</div><!--/post-<?php the_ID(); ?>-->
						<br />				
				<?php endwhile; ?>
				<div class="navigation">
					<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
					<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
					<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
					<?php } ?>
				</div>
				<?php else : ?>
					<h2 class="center">Не найдено</h2>
					<p class="center">Извините, но того, что Вы ищите здесь нет.</p>
					<?php get_search_form(); ?>
			
				<?php endif; ?>
				</div>
				
				
	
</div> <!-- /container-fluid -->
<?php get_footer(); ?>