<?php get_header(); ?>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
								<img src="wp-content/themes/labb1-jacob/assets/images/city.jpg" />
								<div class="text">
									<h1>Hej och välkommen!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
                                <?php
                                    if( have_posts() ) {

                                        while( have_posts() ) {

                                            the_post();
                                            the_content();
                                        }
                                    }
                                ?>

<?php get_footer(); ?>