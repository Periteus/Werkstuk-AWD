<?php
// loop

get_header(); ?>

<div class="row ">
		<div class="large-7 columns blog-page">

<?php if(have_posts()) :
	while(have_posts()) : the_post(); ?>
			<div class="bgtest">
			<!-- thumbnail -->
		<div class="post-thumbnail">
			<?php the_post_thumbnail('banner'); ?>
		</div>
			
	<article class="post-article">
		
	<h2><a class="blog-link" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
		
		<p class="post-date"><span class="dashicons dashicons-calendar-alt"></span><?php the_time('d/m/y'); ?> <span class="dashicons dashicons-admin-users"></span> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> <span class="dashicons dashicons-tag"></span>
		
			<?php 
			
			$categories = get_the_category();
			$seperate = ",";
			$output= '';
			
			if($categories){
				foreach($categories as $category){
					
					$output .= '<a href ="'.get_category_link($category->term_id) . '">' . $category -> cat_name . '</a>' . $seperate;
						
				}
				
				echo trim($output, $seperate);
			}
			
			?>
		</p>
		
	
		<p clss="contentwp">
			<?php the_content(); ?>
		</p>

		
		
</article>
				</div>
			
	


	<?php endwhile;

else : 
	echo '<p> Oeps , verkeerd verbonden? </p>';

endif; ?>
			</div>
	
	<?php get_template_part('content-sidebar');?>
</div>

<?php get_footer();

?>