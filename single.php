
        <h1><?php the_title();?></h1>
                            <?php
                            if( have_posts() ) {

                                while( have_posts() ) {
                                    the_title();
                                    the_post();
                                    the_content();
                                    the_post_thumbnail();
                                }
                            }