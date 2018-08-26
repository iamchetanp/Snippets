/**
 * Create shortcode to get WordPress menu in HTML format.
 * How to use? [cp_wp_menu name="Main Menu"]
 *
 * @param array $atts Array of attributes.
 *
 * @return string HTML menu.
 */
function cp_wp_menu_shortcode( $atts ) {
	$menu = shortcode_atts( array(
		'name' => null,
	), $atts );

	return wp_nav_menu( array(
		'menu' => $name,
		'echo' => false,
	) );
}
add_shortcode( 'cp_wp_menu', 'cp_wp_menu_shortcode' );
