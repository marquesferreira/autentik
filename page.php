<?php
get_header();
?>
<div class="container shop-content">
	<div class="row">
		<div class="col-lg-12">
			<?php 
				if( have_posts() ):
				while (have_posts() ): the_post();?>
			<article class="col-12">
				<h1><?php the_title(); ?></h1>
				<div><?php the_content(); ?></div>
			</article>

			<?php	
			endwhile;
			else:
			?>
				<p>Nothing to display</p>
			<?php
			endif;
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>