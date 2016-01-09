<?php
// loop

get_header(); ?>

	<div class="row ">

		<div class="medium-7 columns blog-page">

			<?php if(have_posts()) :
	while(have_posts()) : the_post(); 
		get_template_part('content');
	 endwhile;

else : 
	echo '<p> Oeps , verkeerd verbonden? </p>';

endif; ?>
		</div>
		<?php get_template_part('content-sidebar'); 

get_footer();

?>