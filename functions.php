<?php

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue Owl Carousel Scripts
 */
function add_owl_carousel() {
    if ( get_option( 'wcprc_reviews_wrapper' ) ) {
        $wrapper = get_option( 'wcprc_reviews_wrapper' );
        if ( get_option( 'wcprc_carousel_options' ) ) {
            $custom_options = get_option( 'wcprc_carousel_options' );
        } else {
            $custom_options = '';
        }
        wp_enqueue_style( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', '2.3.4', 'screen' );
        wp_enqueue_style( 'owl-carousel-default', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css', '2.3.4', 'screen' );
        wp_enqueue_script( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', 'jquery', '2.3.4', true );
        wp_add_inline_script( 'owl-carousel', '
        jQuery(document).ready(function($){
            $("' . $wrapper . '").addClass("owl-carousel owl-theme");
            $("' . $wrapper . '").owlCarousel( {
                ' . $custom_options . '
            } )
        } );' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_owl_carousel' );