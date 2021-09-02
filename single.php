<?php get_header();
?>

<?php
	while ( have_posts() ) :
		the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container">
				<div class="row">
					<div class="col-lg-10 my-3 ml-auto mr-auto">

					<h2 class="entry-title">
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>

					<?php the_excerpt(); ?>
					</div>
				</div>
			</div>
		</article>
		<?php
	endwhile; // End of the loop.
	?>
<?php

if ( is_singular( 'product' ) ) {
	wc_get_template_part( 'content', 'single-product' );
	} else {
	wc_get_template_part( 'content', 'single-product-composite' );
	}

get_footer();
