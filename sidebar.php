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
				<?php dynamic_sidebar('blogmenus-sidor'); ?>
            </li>

			<li>
			<?php
				dynamic_sidebar('blogmenus-arkiv');
			?>
			</li>

			<li class="categories">
			<?php
				dynamic_sidebar('blogmenus-kategori');
			?>
			</li>
		
        </ul>
	</div>
</aside>