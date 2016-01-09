<?php

/* Template Name: Static */

get_header();

if(have_posts()) :
	while(have_posts()) : the_post(); ?>

	<article class="post-article">
		
	
	
	
		
		<?php the_content(); ?>
		
		
		
</article>


	<?php endwhile;

else : 
	echo '<p> Oeps , verkeerd verbonden? </p>';

endif;

get_footer();

?>