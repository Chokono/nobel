<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php 
	$style = get_stylesheet_directory_uri();
?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo $style; ?>/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo $style; ?>/css/products.css">
<link rel="stylesheet" type="text/css" href="<?php echo $style; ?>/font-awesome-4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"> 
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<?php if(is_front_page()){ ?>
		<div class="vid" style="position: absolute;" >
		    <div style="position: relative; width: 100%; height: 100%" data-stellar-ratio="0.3">
				<video loop="" poster="<?php echo $style; ?>/video/vid1.jpg" class="vid" autoplay="" >
				    <source type="video/mp4" src="<?php echo $style; ?>/video/space.mp4">
				    <source type="video/webm" src="<?php echo $style; ?>/video/space.webm">
				    <source type="video/ogg" src="<?php echo $style; ?>/video/space.ogv">
				</video>
		    </div>
		</div>
	<?php } ?>

	<header class="top_header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php if(!is_front_page()){ ?>
						<div class="site-branding">
							<a href="/" class="logo">
								<img src="<?php echo $style; ?>/img/NobelLogo.jpg">
							</a>
						</div>
					<?php } ?>
				</div>
				<div class="col-md-8">
					<?php 
						$header_menu = "header-menu";
						if(is_front_page()){
							$header_menu = $header_menu." light-header-menu";
						}
					?>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu','menu_class'=>$header_menu ) ); ?>
				</div>
			</div>
		</div>
		<?php
				
		$is_shop = get_post_meta( get_the_ID(),"_stock_status",true);
		$top_img = "$style/img/space.jpg";
		$sub_menu = "mainMenu";
		$top_title = get_the_title();

		if(get_post_meta($post->ID, 'top_title', true)&& !$is_shop){
			$top_title = get_post_meta($post->ID, 'top_title', true);
		}

		if(get_post_meta($post->ID, 'sub_menu', true)){
			$sub_menu = get_post_meta($post->ID, 'sub_menu', true);
		}

		if(is_home()){
			$sub_menu = "topAbout_company";
			$top_title = 'Компания "Nobel" в мире';
			$top_img = "$style/img/office.jpg";
		}

		if($is_shop){
			$top_title = "Каталог продукции";
			$sub_menu = "topCatalog";
		}else if(get_the_post_thumbnail_url()){
			$top_img = get_the_post_thumbnail_url();
		}

		?>
		<div class="clear topImage" <?php if(!is_front_page()){ ?> style="background-image: url('<?php echo $top_img; ?>');" <?php } ?> >
			<div class="container">
				<div class="row">
					<?php if(!is_front_page()){ ?>
					<div class="col-md-12">
						<div id="breadcrumbs" class="">
							<i class="fa fa-home" aria-hidden="true"></i>
						      <a href="<?php echo get_option('home'); ?>">Главная</a>
						      <?php foreach((get_the_category()) as $cat) {
						      $cat=$cat->cat_ID;
						      echo(' > '.get_category_parents($cat, TRUE)); } ?>
						 </div>
					</div>
					<?php } ?>
				</div>
				<div class="row">
					<h1 class="top-title"><?php echo $top_title; ?></h1>
				</div>
				<div class="row">
					<div class="submenu">
					 <?php wp_nav_menu("menu=$sub_menu"); ?>
					</div>
				</div>
			</div>
		</div> 
	</header>
<div id="content" class="site-content">
