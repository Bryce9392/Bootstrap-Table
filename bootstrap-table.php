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
    wp_enqueue_style( 'bootstrap-table-css', 'https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css' );
	wp_enqueue_script( 'bootstrap-table-js','https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js', array( 'jquery' ),'',true );
	wp_enqueue_script( 'bootstrap-table-localo-js','https://unpkg.com/bootstrap-table@1.15.4/dist/locale/bootstrap-table-zh-CN.min.js', array( 'jquery' ),'',true );
	
	
	wp_enqueue_style( 'data-tables-css', 'https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.6/b-print-1.5.6/fh-3.1.4/kt-2.5.0/r-2.2.2/sc-2.0.0/datatables.min.css' );
	wp_enqueue_script( 'data-table-js','https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.6/b-print-1.5.6/fh-3.1.4/kt-2.5.0/r-2.2.2/sc-2.0.0/datatables.min.js', array( 'jquery' ),'',true );
	
	wp_enqueue_script( 'data-table', plugin_dir_url( __FILE__ ) . 'js/data-table.js' )
	
	


   
}
add_action( 'wp_enqueue_scripts', 'bootstrap_table_scripts' );
