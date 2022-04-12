<?php
/**
 * The header - </head> and start of <body>.
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Roboto+Condensed&display=swap" rel="stylesheet">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="<?php 
	echo esc_url(
		home_url(
			'wp-content/themes/digitalcommercetheme/assets/css/custom.css'))
			;?>">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
	<nav class="top-row"><?php
		wp_nav_menu(array(
			'menu' => 'shop',
			'theme_location' => '',
			'depth' => 2,
			'fallback_cb' => false,
			'container' => 'ul',
			'menu_class' => 'class-menu'
		));
	?></nav>
	<div class="bottom-row">
		<div>
			<a href="<?php echo esc_url(home_url());?>">
				<img id="logo" src="<?php echo esc_url(home_url('wp-content/uploads/2022/04/icon.png'));?>" alt="logo">
			</a>
				<h2>
					<a href="<?php echo esc_url(home_url());?>">Red Vox</a>
				</h2>
		</div>
		<nav><?php
			wp_nav_menu(array(
				'menu' => 'main',
				'theme_location' => '',
				'depth' => 2,
				'fallback_cb' => false,
				'container' => 'ul',
				'menu_class' => 'class-menu'
			));
		?></nav>
	</div>
</header>