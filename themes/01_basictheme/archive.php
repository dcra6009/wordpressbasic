<?php get_header(); ?>
	<div class="row">
		<div class="col-8">
		<main id="content" class="content ml-5">

		<?php if (have_posts()) :

		$post = $posts[0];
		$not_paged = get_query_var('paged');
		$not_paged = ( empty($not_paged) ) ? true : false;

		?>
		<header class="inform mt-5">
			<h1><?php _e( 'Category', 'basic' ); ?> &laquo;<?php single_cat_title(''); ?>&raquo;</h1>
		</header>

		<?php while (have_posts()) : the_post(); ?>

				<h5><?php the_title(); ?></h5>

		<?php	endwhile;

		else: ?>

			<div class="post">
				<h1><?php _e( 'Posts not found', 'basic' ); ?></h1>
				<?php get_search_form(); ?>
			 </div>

		<?php endif; ?>

		</main> <!-- #content -->
		<div class="ml-3 border-bottom">
			<small><em>archive.php</em></small>
		</div>
		</div>
		<div class="col-4">
			<?php get_sidebar(); ?>
		</div>
	</div> <!-- #row -->
<?php get_footer(); ?>
