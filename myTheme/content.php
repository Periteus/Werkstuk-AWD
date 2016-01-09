<div class="bgtest">
	<!-- thumbnail -->
	<div class="post-thumbnail">
		<a href="<?php the_permalink(); ?>">
			<?php 			the_post_thumbnail('banner'); ?>
		</a>
	</div>

	<article class="post-article">

		<h2><a class="blog-link" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>

		<p class="post-date"><span class="dashicons dashicons-calendar-alt"></span>
			<?php the_time('d/m/y'); ?> <span class="dashicons dashicons-admin-users"></span> by
				<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
					<?php the_author(); ?>
				</a> <span class="dashicons dashicons-tag"></span>

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



		<p class="contentwp">
			<?php echo get_the_excerpt(); ?>
		</p>
		<p>
			<a class="small success button is-small" href="<?php the_permalink(); ?>">Read more  </a>
		</p>




	</article>
</div>