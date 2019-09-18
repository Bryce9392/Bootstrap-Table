<?php

/**
* Plugin Name: Bootstrap Table
* Plugin URI: https://www.yourwebsiteurl.com/
* Description: Bootstrap Table
* Version: 1.0
* Author: Bryce
* Author URI: http://yourwebsiteurl.com/
**/

/**
 * enqueue style and scripts
 */
function bootstrap_table_scripts() {
   // wp_enqueue_style( 'bootstrap-table-css', 'https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css' );
//	wp_enqueue_script( 'bootstrap-table-js','https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js', array( 'jquery' ),'',true );
//	wp_enqueue_script( 'bootstrap-table-localo-js','https://unpkg.com/bootstrap-table@1.15.4/dist/locale/bootstrap-table-zh-CN.min.js', array( 'jquery' ),'',true );
	
	
	wp_enqueue_style( 'data-tables-css', '//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' );
	wp_enqueue_script( 'data-table-js','//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js', array( 'jquery' ),'',true );
	
	wp_enqueue_script( 'data-table', plugin_dir_url( __FILE__ ) . 'js/data-table.js' );
	
	


   
}
add_action( 'wp_enqueue_scripts', 'bootstrap_table_scripts' );
