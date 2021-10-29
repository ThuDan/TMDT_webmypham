<?php
if ( ! function_exists( 'tpfvm_suffix' ) ) {
	/**
	 * Define Script debug.
	 *
	 * @return     string $suffix
	 */
	function tpfvm_suffix() {
		$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

		return $suffix;
	}
}

/**
 * Get Flatsome Icon classes
 */
function tp_get_flatsome_icon_class( $style, $size = null ) {

	$classes = array();
	if ( $style == 'small' ) {
		$classes[] = 'icon plain';}
	if ( $style == 'outline' ) {
		$classes[] = 'icon button circle is-outline';}
	if ( $style == 'outline-round' ) {
		$classes[] = 'icon button round is-outline';}
	if ( $style == 'fill' ) {
		$classes[] = 'icon primary button circle';}
	if ( $style == 'fill-round' ) {
		$classes[] = 'icon primary button round';}
	if ( $size ) {
		$classes[] = 'is-' . $size;}

	return implode( ' ', $classes );
}

/**
 * Get Flatsome Icon
 */
function tp_get_flatsome_icon( $name, $size = null ) {
	if ( $size ) $size = 'style="font-size:' . $size . ';"';

	return '<i class="' . $name . '" ' . $size . '></i>';
}