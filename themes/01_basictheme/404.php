<?php get_header(); ?>

<div class="row">
	<div class="col-8">
	<main id="content" class="content ml-4">
			<article class="post page m-5" id="pageid-<?php the_ID(); ?>">
				<h1><?php _e( 'Page not found!', 'basic' ); ?></h1>
				<p class="border-top">
					<?php get_search_form(); ?>
				</p>
			</article>
	</main>
	<!-- END #content -->
	<div class="ml-3 border-bottom">
		<small><em>404.php</em></small>
	</div>
	</div>
	<div class="col-4">
		<?php get_sidebar(); ?>
	</div>
</div> <!-- #row -->
<?php get_footer(); ?>
