<?php
/**
 Template Name: Home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
 ?>

<?php get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/home_page.css">
<section class="home_page_top">
	<div class="container">
		<div class="row">
        	<?php if (have_posts()) : while (have_posts()) : the_post();
                the_content(); 
            	endwhile; 
            	endif; 
            ?>
		</div>
	</div>
</section>
<section class="home_page_content">
	&nbsp;
</section>

<?php
get_footer();
