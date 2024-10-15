<div class="sidebar">

	<?php wp_nav_menu( array(
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'widget widget-sidenav',
		'container_id'    => '',
		'menu_class'      => 'sidenav',
		'menu_id'         => '',
		'echo'            => true,
		'items_wrap'			=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '<span class="open-children now-closed"></span>',
		'link_before'     => '',
		'link_after'      => '',
		'depth'           => 0, 
		'walker'          => new Sidebar_Walker_Nav_Menu(),
		'theme_location'  => 'sidebar-menu'       
	) ); ?>

</div>