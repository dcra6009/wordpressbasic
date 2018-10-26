<?php get_header(); ?>
	<div class="row">
		<div class="col-8">
			<main id="content" class="content">
					<article class="post page m-5" id="pageid-<?php the_ID(); ?>">
						<h1>Search result:</h1>
						<div class="entry-box clearfix">
						</div>
					</article>
			</main> <!-- #content -->
			<div class="ml-3 border-bottom">
				<small><em>search.php</em></small>
			</div>
		</div>
		<div class="col-4">
			<?php get_sidebar(); ?>
		</div>
	</div> <!-- #row -->
<?php get_footer(); ?>
