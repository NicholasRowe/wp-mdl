<?php
/**
 * The template for displaying all single posts.
 *
 * @package playground
 */

get_header(); ?>

<div class="mdl-layout__content">

	<div class="demo-back">
		<a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="index.html" data-upgraded=",MaterialButton,MaterialRipple">
			<i class="material-icons">arrow_back</i>
			<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
		</div>

		<div class="demo-blog__posts mdl-grid">
			

			<div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">
				<div class="mdl-card__media mdl-color-text--grey-50">
					<h3>On the road again</h3>
				</div>
				<div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
					<div class="minilogo"></div>
					<div>
						<strong>The Newist</strong>
						<span>2 days ago</span>
					</div>
					<div class="section-spacer"></div>
					<div class="meta__favorites">425 <i class="material-icons">favorite</i></div>
					<div><i class="material-icons">bookmark</i></div>
					<div><i class="material-icons">share</i></div>
				</div>
				<div class="mdl-color-text--grey-700 mdl-card__supporting-text">
					<p>
						Excepteur reprehenderit sint exercitation ipsum consequat qui sit id velit elit. Velit anim eiusmod labore sit amet. Voluptate voluptate irure occaecat deserunt incididunt esse in. Sunt velit aliquip sunt elit ex nulla reprehenderit qui ut eiusmod ipsum do. Duis veniam reprehenderit laborum occaecat id proident nulla veniam. Duis enim deserunt voluptate aute veniam sint pariatur exercitation. Irure mollit est sit labore est deserunt pariatur duis aute laboris cupidatat. Consectetur consequat esse est sit veniam adipisicing ipsum enim irure.
					</p>
					<p>
						Qui ullamco consectetur aute fugiat officia ullamco proident Lorem ad irure. Sint eu ut consectetur ut esse veniam laboris adipisicing aliquip minim anim labore commodo. Incididunt eu enim enim ipsum Lorem commodo tempor duis eu ullamco tempor elit occaecat sit. Culpa eu sit voluptate ullamco ad irure. Anim commodo aliquip cillum ea nostrud commodo id culpa eu irure ut proident. Incididunt cillum excepteur incididunt mollit exercitation fugiat in. Magna irure laborum amet non ullamco aliqua eu. Aliquip adipisicing dolore irure culpa aute enim. Ullamco quis eiusmod ipsum laboris quis qui.
					</p>
					<p>
						Cillum ullamco eu cupidatat excepteur Lorem minim sint quis officia irure irure sint fugiat nostrud. Pariatur Lorem irure excepteur Lorem non irure ea fugiat adipisicing esse nisi ullamco proident sint. Consectetur qui quis cillum occaecat ullamco veniam et Lorem cupidatat pariatur. Labore officia ex aliqua et occaecat velit dolor deserunt minim velit mollit irure. Cillum cupidatat enim officia non velit officia labore. Ut esse nisi voluptate et deserunt enim laborum qui magna sint sunt cillum. Id exercitation labore sint ea labore adipisicing deserunt enim commodo consectetur reprehenderit enim. Est anim nostrud quis non fugiat duis cillum. Aliquip enim officia ad commodo id.
					</p>
				</div>
				<div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">
					<form>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label is-upgraded" data-upgraded=",MaterialTextfield">
							<textarea rows="1" class="mdl-textfield__input" id="comment"></textarea>
							<label for="comment" class="mdl-textfield__label">Join the discussion</label>
						</div>
						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" data-upgraded=",MaterialButton,MaterialRipple">
							<i class="material-icons">check</i>
							<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
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
									<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
									<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" data-upgraded=",MaterialButton,MaterialRipple">
										<i class="material-icons">thumb_down</i>
										<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
										<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" data-upgraded=",MaterialButton,MaterialRipple">
											<i class="material-icons">share</i>
											<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
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
														<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
														<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" data-upgraded=",MaterialButton,MaterialRipple">
															<i class="material-icons">thumb_down</i>
															<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
															<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" data-upgraded=",MaterialButton,MaterialRipple">
																<i class="material-icons">share</i>
																<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
															</nav>
														</div>
													</div>
												</div>
											</div>
										</div>


										<?php while ( have_posts() ) : the_post(); ?>

											<?php get_template_part( 'content', 'single' ); ?>

											<?php playground_post_nav(); ?>

											<?php
				// If comments are open or we have at least one comment, load up the comment template
											if ( comments_open() || get_comments_number() ) :
												comments_template();
											endif;
											?>

										<?php endwhile; // end of the loop. ?>


										<?php get_sidebar(); ?>
										<?php get_footer(); ?>



									</div>
								</div>



