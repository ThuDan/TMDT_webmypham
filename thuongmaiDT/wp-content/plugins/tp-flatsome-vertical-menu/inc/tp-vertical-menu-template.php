<?php
/**
 * Element template.
 */

$menu_title = get_theme_mod( 'header_tp_vertical_menu_title', 'TP Vertical Menu' );
$menu_event = get_theme_mod( 'header_tp_vertical_menu_event', 'click' );
$show_mega  = 1;
$icon_style = get_theme_mod( 'header_tp_vertical_menu_icon', '' );
$icon_pos   = get_theme_mod( 'header_tp_vertical_menu_icon_pos', 'left' );
$walker     = 'TP_Vertical_Menu_Dropdown';
?>
<div class="tp-vertical-menu-wrap <?php echo esc_attr( $menu_event ); ?>">
	<div class="tp-vertical-menu-title-wrap icon-pos-<?php echo esc_attr( $icon_pos ); ?>">
		<?php if ( 'right' === $icon_pos ) { ?>
			<span class="tp-vertical-menu-title"><?php echo esc_html( $menu_title ); ?></span>
		<?php } ?>
		<?php echo '<span class="tp-vertical-menu-icon ' . tp_get_flatsome_icon_class( $icon_style, 'small' ) . '">' . tp_get_flatsome_icon( 'icon-menu' ) . '</span>'; // phpcs:ignore ?>
		<?php if ( 'left' === $icon_pos ) { ?>
			<span class="tp-vertical-menu-title"><?php echo esc_html( $menu_title ); ?></span>
		<?php } ?>
	</div>
	<?php
	wp_nav_menu(
		array(
			'theme_location'  => 'tp_vertical_menu',
			'container'       => 'div',
			'container_class' => 'tp-vertical-menu-container',
			'menu_id'         => 'tp_vertical_menu',
			'menu_class'      => 'tp-vertical-menu',
			'depth'           => 0,
			'walker'          => new $walker(),
		)
	);
	?>
</div>
