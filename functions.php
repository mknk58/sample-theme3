<?php
/** テーマ機能追加
* @version 1.0.0
* @since    1.0.0
* @author  i.miku
*/

function theme_setup() {
	add_theme_support( 'custom-logo' );

 register_nav_menus(  array(
	 'primary1' => 'Primary Menu1'
 ) );
}

add_action( 'after_setup_theme' , 'theme_setup' );


function theme_widgets_init(){
	register_sidebar(
		array(
			'name' => 'サイドバー',
			'id'  =>'sidebar-1',
			'description'  => '画面の右側にあるサイドバー',
			'before_widget'  => '<section id="%1$s" class="widget %2$s">',
			'after_widget' =>'</section>',
			'before_title' =>'<h2>',
			'after_title' =>'</h2>'
		)
	);
}
add_action( 'widgets_init', 'theme_widgets_init');


function theme_styles(){
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'theme-common', get_template_directory_uri() . '/css/common.css' );
}

add_action('wp_enqueue_scripts', 'theme_styles');

/** 検索キーワードマークアップ
*/
function theme_search_keyword( $str ){
	if ( is_search() ){
		$query = trim( get_search_query() );
		$query = mb_convert_kana( $query, 'as', 'UTF-8' );
		if( !empty( $query ) ){
			$str = str_replace( $query, '<mark>'. $query. '</mark>', $str );
		}
	}
	return $str;
}

add_action( 'get_the_excerpt', 'theme_search_keyword' );
add_action( 'the_title', 'theme_search_keyword' );

?>
