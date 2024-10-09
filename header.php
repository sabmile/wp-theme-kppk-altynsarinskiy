<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="language" content="ru">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; <?php bloginfo('charset'); ?>" >
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header class="header">
		
		<div class="container">
			
			<div class="header__inner">
				
				<div class="header__top">

					<a class="header__logo" href="#">
						<img class="header__logo-img" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/header/logo.png' ?>" alt="">
					</a>
					
					<h1 class="header__title">
						КГУ «Кабинет психолого-педагогической коррекции Алтынсаринского района» Управления образования акимата Костанайской области
					</h1>
				
				</div>

				<div class="header__bottom">

				<?php
					wp_nav_menu( [
						'theme_location'  => '',
						'menu'            => 'top-menu',
						'container'       => 'nav',
						'container_class' => 'nav',
						'container_id'    => 'nav',
						'menu_class'      => 'header__menu-list',
						'menu_id'         => 'header__menu-list',
						'echo'            => true,
						'fallback_cb'     => '',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
					?>

				</div>

			</div>

		</div>

	</header>