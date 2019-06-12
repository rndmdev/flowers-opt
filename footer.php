<footer class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="footer-raw">

				<div class="footer-col">
					<img src="<?php echo THEME_IMG; ?>logo-footer.png" alt="">
				</div>

				<div class="footer-col">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>

				<div class="footer-col">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>

				<div class="footer-col">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>

			</div>
		</div>

		<div class="footer-bottom">
			<div class="footer-raw">

				<div class="footer-col">
					<div class="footer-copy">© Все права защищены</div>
				</div>

				<div class="footer-col">
					<div class="footer-social">
						<a href="#" class="social-icon insta"></a>
						<a href="#" class="social-icon fb"></a>
						<a href="#" class="social-icon vk"></a>
					</div>
				</div>

				<div class="footer-col footer-col-2">
					<div class="footer-pays">
						<span class="pays-icon visa"></span>
						<span class="pays-icon mc"></span>
					</div>
				</div>

			</div>
		</div>
	</div>
</footer>

<div class="scf-overlay"></div>

<?php wp_footer(); ?>
</body>
</html>
