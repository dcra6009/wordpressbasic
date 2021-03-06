<?php get_header(); ?>
	<div class="row">
		<div class="col-8">
			<main id="content" class="content ml-4">
				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post page m-5" id="pageid-<?php the_ID(); ?>">
						<h1><?php the_title(); ?></h1>
						<div class="entry-box clearfix">
							<?php the_content(); ?>
						</div>
					</article>
					<?php
					if ( comments_open() || get_comments_number() ) {
							comments_template();
					}
				endwhile; ?>
			</main> <!-- #content -->
			<div class="ml-3 border-bottom">
				<small><em>single.php</em></small>
			</div>
		</div>
		<div class="col-4">
			<?php get_sidebar(); ?>
		</div>
	</div> <!-- #row -->
<?php get_footer(); ?>
