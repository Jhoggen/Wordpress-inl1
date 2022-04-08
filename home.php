<?php
get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
                                                    
							<h1>Blogg</h1>
                            <?php if(have_posts()):?>

                                <?php while(have_posts()): the_post(); ?>
							    <article>
                                <?php the_post_thumbnail(null, ['class' => 'img-responsive responsive--full', 'title' => 'Feature image'] );?>
								 
								    <h2 class="title">
									    <a href="/"> <?php the_title(); ?></a>
								    </h2>

                                    <ul class="meta">
							            <li>
								            <i class="fa fa-calendar"></i> <?php the_date(); ?>
							            </li>
							            <li>
								            <i class="fa fa-user"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a>
							            </li>
							            <li>
								            <i class="fa fa-tag"></i>
								            <a href="<?php echo get_permalink(); ?>"><a href=" <?php the_category(); ?>"> </a> 
							            </li> 
						            </ul>
								
                                                                     
                                    <p><?php the_content(); ?></p>
							    </article>
							<?php endwhile; endif; ?>
                            <?php get_template_part('template-parts/pagination'); ?>
						</div>
                        <?php get_template_part('sidebar'); ?>
					</div>
				</div>
			</section>
		</main>





<?php
get_footer();
?>
