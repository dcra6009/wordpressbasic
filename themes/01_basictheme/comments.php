<div id="comments" class="comments-area">
<?php if ( have_comments() ) : ?>
	<h3 class="comments-title"><?php _e('Comments', 'basic'); ?>
		<span class="cnt"><i class="fa fa-comments-o"></i><?php comments_number('0', '1', '%' );?></span></h3>
			<ul class="comment-list">
				<?php
					$comm_args = array(
						'avatar_size' => '60',
						'callback' => 'basic_html5_comment'
					);
					$comm_args['callback'] = '';
					wp_list_comments( $comm_args );
				?>
			</ul>

<?php endif; // have_comments()

	comment_form();
?>
<div class="ml-3 border-bottom">
	<small><em>comments.php</em></small>
</div>
</div><!-- #comments -->
