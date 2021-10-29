const toggleVerticalMenu = function() {
	let items = document.querySelectorAll( '.tp-vertical-menu-wrap.click .tp-vertical-menu-title-wrap' );

	if ( 'undefined' === typeof items ) {
		return;
	}

	items.forEach(
		function(item) {
			let body                = document.querySelector( 'body' ),
			header_wrap             = document.querySelector( '.header-wrapper' ),
			menu_wrap               = item.closest( '.tp-vertical-menu-wrap' ),
			vertical_menu_container = menu_wrap.querySelector( '.tp-vertical-menu-container' ),
			vertical_menu           = vertical_menu_container.querySelector( '.tp-vertical-menu' ),
			speed                   = 300;

			if ( body.classList.contains( 'tp-show-menu-in-home' ) && body.classList.contains( 'home' ) ) {
				if ( tp_vm_options.hide_submenu_on_mobile && window.matchMedia( '( max-width: 849px )' ).matches ) {
					menu_wrap.classList.remove( 'open' );
				} else {
					menu_wrap.classList.add( 'open' );
				}
			} else {
				menu_wrap.classList.remove( 'open' );
			}

			if ( header_wrap.classList.contains( 'stuck' ) ) {
				menu_wrap.classList.remove( 'open' );
			}

			// Set transition-duration.
			vertical_menu_container.style.transitionDuration = speed + 'ms';

			if ( menu_wrap.classList.contains( 'open' ) ) {
				vertical_menu_container.style.height = vertical_menu.getBoundingClientRect().height + 1 + 'px';
			} else {
				vertical_menu_container.style.height = '0';
			}

			item.onclick = function() {
				if ( menu_wrap.classList.contains( 'open' ) ) {
					// Close.
					// Update class.
					menu_wrap.classList.remove( "is-opening" );
					menu_wrap.classList.add( "is-closing" );

					// Set the height so only the toggle is visible.
					vertical_menu_container.style.height = 0;

					setTimeout(
						function() {
							if (menu_wrap.classList.contains( "is-closing" )) {
								menu_wrap.classList.remove( 'open' );
							}
							menu_wrap.classList.remove( "is-closing" );
						},
						speed
					);
				} else {
					// Open.
					// Update class.
					menu_wrap.classList.remove( "is-closing" );
					menu_wrap.classList.add( "is-opening" );

					// Momentarily show the contents just to get the height.
					menu_wrap.classList.add( "open" );
					let vertical_menu_height = vertical_menu.getBoundingClientRect().height + 1;
					menu_wrap.classList.remove( "open" );

					// Set the correct height and let CSS transition it.
					vertical_menu_container.style.height = vertical_menu_height + "px";

					setTimeout(
						function() {
							menu_wrap.classList.remove( "is-opening" );
							menu_wrap.classList.add( "open" );
						},
						speed
					);
				}
			}

			window.addEventListener(
				'scroll',
				function() {
					if ( header_wrap.classList.contains( 'stuck' ) ) {
						menu_wrap.classList.remove( 'open' );
						vertical_menu_container.style.height             = 0;
						vertical_menu_container.style.transitionDuration = '0ms';
					} else {
						if ( tp_vm_options.hide_submenu_on_mobile && window.matchMedia( '( max-width: 849px )' ).matches ) {
							return;
						}

						vertical_menu_container.style.transitionDuration = 0 + 'ms';
						if ( body.classList.contains( 'tp-show-menu-in-home' ) && body.classList.contains( 'home' ) ) {
							vertical_menu_container.style.height = vertical_menu.getBoundingClientRect().height + 1 + 'px';
						} else {
							vertical_menu_container.style.height = '0';
						}
					}
				}
			);
		}
	)
}

document.addEventListener(
	'DOMContentLoaded',
	function() {
		toggleVerticalMenu();
	}
);
