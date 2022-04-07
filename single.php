<?php get_header();


?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
								 
                            <h1> <?php the_title(); ?> </h1>
                                <?php
                                    if( have_posts() ) {

                                        while( have_posts() ) {
                                            the_post();
                                            the_content();
                                            get_template_part('template-parts/content')
                                        }
                                    }

                                
                                ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

<?php get_footer(); ?>