<!-- sidobar till bloggsidan -->

<aside id="secondary" class="col-xs-12 col-md-3">
	<div id="sidebar">
		<ul>
			<li>
            <?php get_search_form(); ?>
			</li>
		</ul>
		
		<ul role="navigation">
			<li class="pagenav">
				<?php dynamic_sidebar('sidor-blogsidebar'); ?>

				<?php
					wp_nav_menu(array(
						'theme_location' => 'sidor-blogsidebar',
						'menu_class' => 'menu',
					));
				?>

            </li>
			<?php
				dynamic_sidebar('arkiv-blogsidebar');
			?>


			<li class="categories">
			<?php
				dynamic_sidebar('kategori-blogsidebar');
			?>
			<?php 
			wp_nav_menu(array(
				'theme_location' => 'kategori-blogsidebar',
				'menu_class' => 'menu',
			));
			?>
			</li>
		
        </ul>
	</div>
</aside>