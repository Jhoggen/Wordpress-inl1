		<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
                        <?php dynamic_sidebar('footer-menu-1'); ?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                    <?php dynamic_sidebar('footer-menu-2'); ?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<ul class="social">
                        <?php dynamic_sidebar('footer-menu-3'); ?>
						</ul>
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<?php dynamic_sidebar('footer-copyright'); ?>
					</div>
				</div>
			</div>
		</footer>


<?php wp_footer(); ?>
</body>
</html>