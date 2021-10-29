<?php
/*************
 * TP Vertical Menu
 *************/

if ( ! class_exists( 'Flatsome_Option' ) ) {
	return;
}

Flatsome_Option::add_section(
	'header_tp_vertical_menu',
	array(
		'title' => __( 'TP Vertical Menu', 'tp-fvm' ),
		'panel' => 'header',
	)
);

Flatsome_Option::add_field(
	'option',
	array(
		'type'      => 'radio-image',
		'settings'  => 'header_tp_vertical_menu_icon',
		'label'     => __( 'Icon Style', 'flatsome-admin' ),
		'section'   => 'header_tp_vertical_menu',
		'default'   => '',
		'transport' => 'postMessage',
		'choices'   => array(
			''              => $image_url . 'nav-icon-plain.svg',
			'outline'       => $image_url . 'nav-icon-outline.svg',
			'fill'          => $image_url . 'nav-icon-fill.svg',
			'fill-round'    => $image_url . 'nav-icon-fill-round.svg',
			'outline-round' => $image_url . 'nav-icon-outline-round.svg',
		),
	)
);

Flatsome_Option::add_field(
	'option',
	array(
		'type'      => 'radio-buttonset',
		'settings'  => 'header_tp_vertical_menu_icon_pos',
		'label'     => __( 'Icon Position', 'tp-fvm' ),
		'section'   => 'header_tp_vertical_menu',
		'default'   => 'left',
		'transport' => 'postMessage',
		'choices'   => array(
			'left'  => __( 'Left', 'tp-fvm' ),
			'right' => __( 'Right', 'tp-fvm' ),
		),
	)
);

Flatsome_Option::add_field(
	'option',
	array(
		'type'      => 'text',
		'settings'  => 'header_tp_vertical_menu_title',
		'label'     => __( 'Title', 'tp-fvm' ),
		'section'   => 'header_tp_vertical_menu',
		'transport' => 'postMessage',
		'default'   => 'TP Vertical Menu',
	)
);

Flatsome_Option::add_field(
	'option',
	array(
		'type'      => 'checkbox',
		'transport' => 'postMessage',
		'settings'  => 'header_tp_vertical_menu_hide_title_on_mobile',
		'label'     => __( 'Hide Title on Mobile', 'tp-fvm' ),
		'section'   => 'header_tp_vertical_menu',
		'default'   => 0,
	)
);

Flatsome_Option::add_field(
	'option',
	array(
		'type'     => 'radio-buttonset',
		'settings' => 'header_tp_vertical_menu_event',
		'label'    => __( 'Event', 'tp-fvm' ),
		'section'  => 'header_tp_vertical_menu',
		'default'  => 'click',
		'choices'  => array(
			'hover' => __( 'Hover', 'tp-fvm' ),
			'click' => __( 'Click', 'tp-fvm' ),
		),
	)
);

Flatsome_Option::add_field(
	'option',
	array(
		'type'      => 'checkbox',
		'transport' => 'postMessage',
		'settings'  => 'header_tp_vertical_menu_show_menu_in_home',
		'label'     => __( 'Auto show menu in Home page', 'tp-fvm' ),
		'section'   => 'header_tp_vertical_menu',
		'default'   => 0,
	)
);

Flatsome_Option::add_field(
	'option',
	array(
		'type'      => 'checkbox',
		'transport' => 'postMessage',
		'settings'  => 'header_tp_vertical_menu_hide_submenu_on_mobile',
		'label'     => __( 'Hide Submenu on Mobile', 'tp-fvm' ),
		'section'   => 'header_tp_vertical_menu',
		'default'   => 0,
	)
);

Flatsome_Option::add_field(
	'option',
	array(
		'type'      => 'checkbox',
		'transport' => 'postMessage',
		'settings'  => 'header_tp_vertical_menu_sub_menu_at_top',
		'label'     => __( 'Display Submenu at top', 'tp-fvm' ),
		'section'   => 'header_tp_vertical_menu',
		'default'   => 0,
	)
);

Flatsome_Option::add_field(
	'',
	array(
		'type'     => 'custom',
		'settings' => 'custom_title_header_tp_vertical_menu_style',
		'label'    => __( '', 'tp-fvm' ),
		'section'  => 'header_tp_vertical_menu',
		'default'  => '<div class="options-title-divider">Style</div>',
	)
);

Flatsome_Option::add_field(
	'option',
	array(
		'type'        => 'dimension',
		'settings'    => 'header_tp_vertical_menu_width',
		'label'       => __( 'Width', 'tp-fvm' ),
		'description' => 'Units: px, em, rem, %. Example: 100%, 100px, 10em, 10rem',
		'section'     => 'header_tp_vertical_menu',
		'default'     => '100%',
		'transport'   => 'postMessage',
	)
);

Flatsome_Option::add_field(
	'option',
	array(
		'type'        => 'dimension',
		'settings'    => 'header_tp_vertical_menu_submenu_width',
		'label'       => __( 'Submenu Width', 'tp-fvm' ),
		'description' => 'Units: px, em, rem, %. Example: 100%, 100px, 10em, 10rem',
		'section'     => 'header_tp_vertical_menu',
		'default'     => '100%',
		'transport'   => 'postMessage',
	)
);

Flatsome_Option::add_field(
	'option',
	array(
		'type'      => 'color-alpha',
		'alpha'     => true,
		'settings'  => 'header_tp_vertical_menu_bg',
		'label'     => __( 'Background Color', 'tp-fvm' ),
		'section'   => 'header_tp_vertical_menu',
		'default'   => '#1d71ab',
		'transport' => 'postMessage',
	)
);

Flatsome_Option::add_field(
	'option',
	array(
		'type'      => 'color-alpha',
		'alpha'     => true,
		'settings'  => 'header_tp_vertical_menu_title_color',
		'label'     => __( 'Title Color', 'tp-fvm' ),
		'section'   => 'header_tp_vertical_menu',
		'default'   => '#fff',
		'transport' => 'postMessage',
	)
);

Flatsome_Option::add_field(
	'option',
	array(
		'type'      => 'color-alpha',
		'alpha'     => true,
		'settings'  => 'header_tp_vertical_menu_icon_color',
		'label'     => __( 'Icon Color', 'tp-fvm' ),
		'section'   => 'header_tp_vertical_menu',
		'default'   => '#fff',
		'transport' => 'postMessage',
	)
);

/**
 * Register customizer partials
 *
 * @param WP_Customize_Manager $wp_customize wp customizer.
 * @return void
 */
function flatsome_refresh_header_tp_vertical_menu_partials( WP_Customize_Manager $wp_customize ) {

	if ( ! isset( $wp_customize->selective_refresh ) ) {
		return;
	}

	$wp_customize->selective_refresh->add_partial(
		'header-tp-vertical-menu',
		array(
			'selector'            => '.tp-vertical-menu-wrap',
			'container_inclusive' => true,
			'settings'            => array(
				'header_tp_vertical_menu_title',
				'header_tp_vertical_menu_icon_pos',
				'header_tp_vertical_menu_icon',
				'header_tp_vertical_menu_event',
				'header_tp_vertical_menu_show_menu_in_home',
			),
			'render_callback'     => function () {
				include dirname( __FILE__ ) . '/tp-vertical-menu-template.php';
			},
		)
	);

}
add_action( 'customize_register', 'flatsome_refresh_header_tp_vertical_menu_partials' );
