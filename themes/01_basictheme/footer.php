<footer id="footer">
	<nav class="navbar navbar-expand">
	<?php if (has_nav_menu('bottom_menu')) {
		wp_nav_menu( array(
				'theme_location' => 'bottom_menu',
				'menu_id' => 'footer-menu',
				'depth' => 1,
				'container' => false,
				'menu_class'     => 'nav m-2 pl-3',
			));
	}
	?>
	</nav>
</footer>
<?php wp_footer(); ?>
</div> <!-- .end of wrapper -->
</body>
</html>
