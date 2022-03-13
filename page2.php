<?php
/*
Template Name: Page Second
*/
get_header(); ?>
<!-- page2 -->

  <div id="content" class="pageclr2">
		<div id="breadcrumb">
			<a href="/">Главная &gt;</a>
			<?php the_title(); ?>
			<!-- <blockquote> 
			  <p></p>
			</blockquote> -->
		</div>

 <!-- Цикл основной --> 
 			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
			<h2 class="title"><?php //the_title(); ?></h2>
				<div class="entry">
<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(300,225), array("class" => "alignleft post_thumbnail")); } ?>
<br>				<p>
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
					</p>
	
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	
				</div>
			</div>
			<?php endwhile; endif; ?>
		<?php if (current_user_can('edit_post', $post->ID)) { ?>	
		<div style="text-align:right; padding: 15px;"><img src="<?php bloginfo('url'); ?>/images/edit.png" />
		<?php edit_post_link('Редактировать', '', ''); ?>		
		</div>
		<?php } ?>
 <!-- конец  -->

</div>
<!-- /content -->

<?php get_footer(); ?>