<?php get_header(); ?>
<section class="main_content">
		<div class="container">
			<div class="row woo_search">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
		</div>
		<div class="container">
			<div class="row">
					<div class="content-text">
						<div class="blog_item">
							<div class="row">
								<div class="col-md-12">
									<?php woocommerce_content(); ?>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
</section>







































<?php

get_footer();
