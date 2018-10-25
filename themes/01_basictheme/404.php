<?php get_header(); ?>

<div class="row">
	<div class="col-8">
	<main id="content" class="content ml-4">
		<div class="entry-box clearfix">
				<p><?php _e( 'Page not found!', 'basic' ); ?></p>
				<?php get_search_form(); ?>
		</div>
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
