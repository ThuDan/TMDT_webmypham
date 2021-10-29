<?php
/**
 * TP Vertical Menu class
 */
class TP_Vertical_Menu {
	/**
	 * Construct.
	 */
	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'includes' ) );
		add_filter( 'flatsome_header_element', array( $this, 'vertical_menu_element' ) );
		add_action( 'after_setup_theme', array( $this, 'register_vertical_menu_location' ) );
		add_action( 'flatsome_header_elements', array( $this, 'tp_vertical_menu_template' ) );
		add_action( 'customize_controls_print_styles', array( $this, 'customizer_controls_scripts' ), 11 );

		add_action( 'customize_preview_init', array( $this, 'customizer_preview_scripts' ), 11 );

		add_action( 'init', array( $this, 'load_textdomain' ) );

		add_action( 'wp_enqueue_scripts', array( $this, 'frontend_scripts' ) );

		add_filter( 'body_class', array( $this, 'body_classes' ) );
	}

	/**
	 * Add custom classes to body
	 *
	 * @param array $classes classes.
	 * @return array
	 */
	public function body_classes( $classes ) {
		$show_menu_in_home    = get_theme_mod( 'header_tp_vertical_menu_show_menu_in_home', '0' );
		$show_sub_menu_at_top = get_theme_mod( 'header_tp_vertical_menu_sub_menu_at_top', '0' );
		if ( $show_menu_in_home ) {
			$classes[] = 'tp-show-menu-in-home';
		}
		if ( $show_sub_menu_at_top ) {
			$classes[] = 'tp-show-submenu-at-top';
		}

		return $classes;
	}

	/**
	 * Enqueue front end scripts
	 */
	public function frontend_scripts() {
		wp_enqueue_style(
			'tp-vertical-menu',
			TP_FL_VERTICAL_MENU_URI . 'assets/css/frontend.css',
			array(),
			TP_FL_VERTICAL_MENU_VERSION,
			'all'
		);

		$menu_bg                = get_theme_mod( 'header_tp_vertical_menu_bg', '#1d71ab' );
		$title_color            = get_theme_mod( 'header_tp_vertical_menu_title_color', '#fff' );
		$icon_color             = get_theme_mod( 'header_tp_vertical_menu_icon_color', '#fff' );
		$menu_width             = get_theme_mod( 'header_tp_vertical_menu_width', '100%' );
		$submenu_width          = get_theme_mod( 'header_tp_vertical_menu_submenu_width', '100%' );
		$hide_title_on_mobile   = get_theme_mod( 'header_tp_vertical_menu_hide_title_on_mobile', false );
		$hide_submenu_on_mobile = get_theme_mod( 'header_tp_vertical_menu_hide_submenu_on_mobile', false );

		$custom_styles  = '';
		$custom_styles .= '.tp-vertical-menu-wrap {background: ' . $menu_bg . '; width: ' . $menu_width . '}';
		$custom_styles .= '.tp-vertical-menu-wrap .tp-vertical-menu-container {width: ' . $submenu_width . '}';
		$custom_styles .= '.tp-vertical-menu-wrap .tp-vertical-menu-title-wrap .tp-vertical-menu-title {color: ' . $title_color . '}';
		$custom_styles .= '.tp-vertical-menu-wrap .tp-vertical-menu-title-wrap .tp-vertical-menu-icon i {color: ' . $icon_color . '}';
		if ( $hide_title_on_mobile ) {
			$custom_styles .= '@media (max-width: 849px) { .tp-vertical-menu-title { display: none; } }';
		}
		if ( $hide_submenu_on_mobile ) {
			$custom_styles .= '@media (max-width: 849px) { .home.tp-show-menu-in-home .tp-vertical-menu-wrap.hover .tp-vertical-menu-container { display: none; } .home.tp-show-menu-in-home .tp-vertical-menu-wrap.hover:hover .tp-vertical-menu-container { display: block } }';
		}
		wp_add_inline_style(
			'tp-vertical-menu',
			$custom_styles
		);

		wp_enqueue_script(
			'tp-vertical-menu',
			TP_FL_VERTICAL_MENU_URI . 'assets/js/tp-vertical-menu-frontend' . tpfvm_suffix() . '.js',
			array(),
			TP_FL_VERTICAL_MENU_VERSION,
			true
		);

		wp_localize_script(
			'tp-vertical-menu',
			'tp_vm_options',
			array(
				'hide_submenu_on_mobile' => $hide_submenu_on_mobile ? 'true' : 'false',
			)
		);
	}

	/**
	 * Load plugin textdomain.
	 */
	public function load_textdomain() {
		load_plugin_textdomain( 'tp-fvm', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}

	/**
	 * Create menu element
	 *
	 * @param array $nav_elements nav elements.
	 */
	public function vertical_menu_element( $nav_elements ) {
		$nav_elements['tp-vertical-menu'] = __( '☰ TP Vertical Menu', 'tp-fvm' );

		return $nav_elements;
	}

	/**
	 * Register menu location
	 */
	public function register_vertical_menu_location() {
		register_nav_menus(
			array(
				'tp_vertical_menu' => __( 'TP Vertical Menu', 'tp-fvm' ),
			)
		);

	}

	/**
	 * Load customizer preview scripts
	 *
	 * @return void
	 */
	public function customizer_preview_scripts() {
		wp_enqueue_script(
			'tp-vertical-menu-customizer-preview',
			TP_FL_VERTICAL_MENU_URI . 'assets/js/tp-vertical-menu-customizer-preview' . tpfvm_suffix() . '.js',
			array( 'jquery' ),
			TP_FL_VERTICAL_MENU_VERSION,
			true
		);
	}

	/**
	 * Load customizer controls scripts
	 *
	 * @return void
	 */
	public function customizer_controls_scripts() {
		wp_enqueue_script(
			'tp-vertical-menu-customizer',
			TP_FL_VERTICAL_MENU_URI . 'assets/js/tp-vertical-menu-customizer' . tpfvm_suffix() . '.js',
			array(),
			TP_FL_VERTICAL_MENU_VERSION,
			true
		);
	}

	/**
	 * Include files
	 *
	 * @return void
	 */
	public function includes() {
		$image_url = get_template_directory_uri() . '/inc/admin/customizer/img/';
		include_once dirname( __FILE__ ) . '/options-header-tp-vertical-menu.php';
	}

	/**
	 * Render template for element
	 *
	 * @param string $value Menu key.
	 * @return void
	 */
	public function tp_vertical_menu_template( $value ) {
		if ( 'tp-vertical-menu' === $value ) {
			include dirname( __FILE__ ) . '/tp-vertical-menu-template.php';
		}
	}
}
