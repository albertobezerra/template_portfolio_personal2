<?php 

function add_estilos_e_scripts() {
  wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script2', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script3', get_template_directory_uri() . '/assets/vendor/jquery-easing/jquery.easing.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script4', get_template_directory_uri() . '/assets/js/resume.min.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_estilos_e_scripts' );


function add_suport_theme(){
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme','add_suport_theme');


 ?>