<div class="medium-4 columns blog page">
		<div class="searchform">
			<?php get_search_form(); ?>
		</div>
		
		<div clas="side-archive" >
		
		<h2>Archives by Month:</h2>
		<ul class="archive-link">
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		
		<h2>Archives by Subject:</h2>
		<ul class="archive-link">
			 <?php wp_list_categories(); ?>
		</ul>

	</div>
		
	</div>
	
</div>