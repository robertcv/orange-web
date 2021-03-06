<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Orange Web Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="features" class="features section custom-reduce-padding-2">
		        <div class="container">
		            <div class="row">
		            	<div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 documentwrapper">
							<?php if ( have_posts() ) : ?>
								<?php /* Start the Loop */ ?>
								<?php while ( have_posts() ) : the_post(); ?>

									<?php
										/* Include the Post-Format-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
										get_template_part( 'content', get_post_format() );
									?>

								<?php endwhile; ?>

								<?php orange_web_theme_paging_nav(); ?>
							<?php else : ?>
								<?php get_template_part( 'content', 'none' ); ?>
							<?php endif; ?>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
							<?php get_sidebar(); ?>
						</div>
					</div><!--//row-->
		        </div><!--//container-->
		    </section><!--//features section document-->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
