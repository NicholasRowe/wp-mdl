<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package wp_mdl
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">
	<form>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label is-upgraded" data-upgraded=",MaterialTextfield">
			<textarea rows="1" class="mdl-textfield__input" id="comment"></textarea>
			<label for="comment" class="mdl-textfield__label">Join the discussion</label>
		</div>
		<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" data-upgraded=",MaterialButton,MaterialRipple">
			<i class="material-icons">check</i>
			<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
		</button>
	</form>
	<div class="comment mdl-color-text--grey-700">
		<header class="comment__header">
			<img src="images/co1.jpg" class="comment__avatar">
			<div class="comment__author">
				<strong>James Splayd</strong>
				<span>2 days ago</span>
			</div>
		</header>
		<div class="comment__text">
			In in culpa nulla elit esse. Ex cillum enim aliquip sit sit ullamco ex eiusmod fugiat. Cupidatat ad minim officia mollit laborum magna dolor tempor cupidatat mollit. Est velit sit ad aliqua ullamco laborum excepteur dolore proident incididunt in labore elit.
		</div>
		<nav class="comment__actions">
			<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" data-upgraded=",MaterialButton,MaterialRipple">
				<i class="material-icons">thumb_up</i>
				<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
			</button>
			<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" data-upgraded=",MaterialButton,MaterialRipple">
				<i class="material-icons">thumb_down</i>
				<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
			</button>
			<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" data-upgraded=",MaterialButton,MaterialRipple">
				<i class="material-icons">share</i>
				<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
			</button>
		</nav>
		<div class="comment__answers">
			<div class="comment">
				<header class="comment__header">
					<img src="images/co2.jpg" class="comment__avatar">
					<div class="comment__author">
						<strong>John Dufry</strong>
						<span>2 days ago</span>
					</div>
				</header>
				<div class="comment__text">
					Yep, agree!
				</div>
				<nav class="comment__actions">
					<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" data-upgraded=",MaterialButton,MaterialRipple">
						<i class="material-icons">thumb_up</i>
						<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
					</button>
					<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" data-upgraded=",MaterialButton,MaterialRipple">
						<i class="material-icons">thumb_down</i>
						<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" data-upgraded=",MaterialButton,MaterialRipple">
							<i class="material-icons">share</i>
							<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
						</button>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
<p class="no-comments"><?php _e( 'Comments are closed.', 'wp_mdl' ); ?></p>
<?php endif; ?>


<div id="comments" class="comments-area">


	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'wp_mdl' ),
				number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
				?>
			</h2>

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
				<nav id="comment-nav-above" class="comment-navigation" role="navigation">
					<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'wp_mdl' ); ?></h1>
					<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'wp_mdl' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'wp_mdl' ) ); ?></div>
				</nav><!-- #comment-nav-above -->
			<?php endif; // check for comment navigation ?>

			<ol class="comment-list">
				<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
					) );
					?>
				</ol><!-- .comment-list -->

				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
					<nav id="comment-nav-below" class="comment-navigation" role="navigation">
						<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'wp_mdl' ); ?></h1>
						<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'wp_mdl' ) ); ?></div>
						<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'wp_mdl' ) ); ?></div>
					</nav><!-- #comment-nav-below -->
				<?php endif; // check for comment navigation ?>

			<?php endif; // have_comments() ?>



			<?php// comment_form(); ?>

		</div><!-- #comments -->
