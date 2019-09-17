<?php

/**
 * enqueue style and scripts
 */
function bootstrap_table_scripts() {
    wp_enqueue_style( 'bootstrap-table-css', 'https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css' );
	wp_enqueue_script( 'bootstrap-table-js','https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js', array( 'jquery' ),'',true );
	wp_enqueue_script( 'bootstrap-table-localo-js','https://unpkg.com/bootstrap-table@1.15.4/dist/locale/bootstrap-table-zh-CN.min.js', array( 'jquery' ),'',true );
   
}
add_action( 'wp_enqueue_scripts', 'bootstrap_table_scripts' );
