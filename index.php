<?php get_header(); ?>
	<section class="main_content">
		<div class="container">
			<div class="row">	
				<div class="content-text news">
					<div class="blog_item">
						<?php
							if(have_posts() && is_home() && !is_front_page()){ ?>			
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
						<?php 
							while (have_posts()){
								the_post();
								the_category( ', ' ); 
								the_title('<h2 class="news_title" ><a href="'.esc_url(get_permalink()).'" rel="bookmark">', '</a></h2>');
								echo wp_trim_words( get_the_content(), 25, ' ...' );
								$current_date = get_the_date('j F Y');
								$current_date = explode(" ", $current_date);
								echo "<div class='news_date_div' ><div class='news_date' >$current_date[0]</div>";
								echo "<div class='news_month' >$current_date[1]</div>";
								echo "<div class='news_year' >$current_date[2]</div>";
								echo "</div>";
								echo '<a href="';
								the_permalink();
								echo '">подробнее</a>';
							}
							the_posts_navigation();
						}else {
							get_template_part( 'template-parts/content', 'none' );
						} ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();