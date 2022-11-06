<?php
// https://www.webtimiser.de/wordpress-child-theme-erstellen/
function child_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-theme-css', get_stylesheet_directory_uri() .'/style.css' , array('parent-style'));
}
add_action( 'wp_enqueue_scripts', 'child_theme_styles' );

// Archive title in Eksell couldn't have HTML in it, but I needed a link: 
function mandrasch_add_header_title(){
    echo '<div class="archive-title i-a a-fade-up" style="font-size:2rem;">Hi! This is my personal blog for general notes and thoughts. My developer portfolio is located at <a href="https://mandrasch.dev">mandrasch.dev</a> and I share development notes on <a href="https://dev.to/mandrasch/">dev.to/mandrasch</a>.</div>';
}
add_action('eksell_archive_header_start', 'mandrasch_add_header_title');