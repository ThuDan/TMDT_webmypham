/**
 * Color
 */
function tp_customizer_live_update( id, selector, property ) {
	let setting = id;
	wp.customize(
		setting,
		function( value ) {
			value.bind(
				function( newval ) {
					console.log( jQuery( 'style#' + id ).length );
					if ( jQuery( 'style#' + id ).length ) {
						jQuery( 'style#' + id ).html( selector + '{' + property + ':' + newval + ';}' );
					} else {
						jQuery( 'head' ).append( '<style id="' + id + '">' + selector + '{' + property + ':' + newval + '}</style>' );

						setTimeout(
							function() {
								jQuery( 'style#' + id ).not( ':last' ).remove();
							},
							1000
						);
					}
				}
			);
		}
	);
}

document.addEventListener(
	'DOMContentLoaded',
	function() {
		tp_customizer_live_update( 'header_tp_vertical_menu_bg', '.tp-vertical-menu-wrap', 'background-color' );
		tp_customizer_live_update( 'header_tp_vertical_menu_title_color', '.tp-vertical-menu-wrap .tp-vertical-menu-title-wrap .tp-vertical-menu-title', 'color' );
		tp_customizer_live_update( 'header_tp_vertical_menu_icon_color', '.tp-vertical-menu-wrap .tp-vertical-menu-title-wrap .tp-vertical-menu-icon i', 'color' );

		tp_customizer_live_update( 'header_tp_vertical_menu_width', '.tp-vertical-menu-wrap', 'width' );
		tp_customizer_live_update( 'header_tp_vertical_menu_submenu_width', '.tp-vertical-menu-wrap .tp-vertical-menu-container', 'width' );
	}
);
