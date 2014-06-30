<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<style>
		/*--Shop CSS--*/
		.product-thumb {
				width: 45%;
				float: left;
		}
		.product-info {
				width: 45%;
				margin-left: 5%;
				float: right;
		}
		.product-info h1 {
				font-size: 1.5em;
				margin-bottom: 0.5em;
		}
		.product-price, .product-status, .product-description {
				margin: 5px 0;
		}
		.order-button {
				color: #fff;
				background: rgb(33, 189, 12);
				text-decoration: none;
				padding: 5px;
				margin: 15px 0;
				display: table;
		}
		.post-info {
				clear: both;
				padding-top: 15px;
		}
	</style>
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<header>
					<!--BEGIN: PRODUCT THUMBNAIL-->
					<div class="product-thumb">
							<?php the_post_thumbnail( 'medium' ); ?>
					</div>
					<!--END: PRODUCT THUMBNAIL-->
			 
					<!--BEGIN: PRODUCT INFO-->
					<div class="product-info">
						<h1><?php the_title(); ?></h1>
						<p class="product-price">
								<?php echo "<strong>Client name:</strong> ". get_post_meta( $post->ID, 'wpcf-project-client-name', true); ?>
						</p>
					</div>
					<!--BEGIN: PRODUCT INFO-->
				</header>
				 
				<div class="post-info">
					<?php the_content(); ?>
				</div>
				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>