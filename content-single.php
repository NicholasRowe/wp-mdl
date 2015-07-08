<?php
/**
 * @package wp_mdl
 */
?>


<div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">

	<div class="mdl-card__media mdl-color-text--grey-50">
		<h1><?php the_title(); ?></h1>
	</div>

	<div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
		<div class="minilogo"></div>
		<div>
			<strong>The Newist</strong>
			<span><?php wp_mdl_posted_on(); ?></span>
		</div>
		<div class="section-spacer"></div>
		<div class="meta__favorites">425 <i class="material-icons">favorite</i></div>
		<div><i class="material-icons">bookmark</i></div>
		<div><i class="material-icons">share</i></div>
	</div>

	<div class="mdl-color-text--grey-700 mdl-card__supporting-text">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'wp_mdl' ),
			'after'  => '</div>',
			) );
			?>

	</div>
		
</div>

