<?php
/**
 * The template for displaying all single posts.
 *
 * @package wp_mdl
 */

get_header(); ?>



<div class="mdl-layout__content">

	<div class="demo-back">
		<a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="index.html" data-upgraded=",MaterialButton,MaterialRipple">
			<i class="material-icons">arrow_back</i>
			<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
		</div>

		<div class="demo-blog__posts mdl-grid">

			<?php while ( have_posts() ) : the_post(); ?>




					<?php get_template_part( 'content', 'single' ); ?>

					<?php wp_mdl_post_nav(); ?>

					<?php
				// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>


				<?php get_footer(); ?>



			</div>
		</div>



