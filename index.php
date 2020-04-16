<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package skyfri
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="" class="site-main">

			<div id="" class="container">
				<div id="main" class="flex-row">
					<!-- ------ Let the loop begin ------ -->

					<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) :
							?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
							<?php
						endif;

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/loop', get_post_type() );

						endwhile;

						// the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
					<!-- ------ Let the loop end ------ -->
				</div>
			</div>
				<div class="nav-links">
					<div class="nav-previous">
						<?php echo get_next_posts_link( '&#11207; Older posts', 0 ); ?>
					</div>
					<div class="nav-next">
						<?php echo get_previous_posts_link( 'Newer posts &#11208;', 0 ); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
