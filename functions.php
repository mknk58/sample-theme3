<?php
/** テーマ機能追加
* @version 1.0.0
* @since    1.0.0
* @author  i.miku
*/

function theme_setup() {
	add_theme_support( 'custom-logo' );

}

add_action( 'after_setup_theme' , 'theme_setup' );


?>
