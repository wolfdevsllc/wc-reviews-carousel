<?php

defined( 'ABSPATH' ) || exit;

/**
 * Customizer for settings
 */
function wcprc_customizer_fields( $wp_customize ) {
    $wp_customize->add_section( 'wcprc_settings' , array(
        'title'      => 'WC Reviews Carousel',
        'priority'   => 100,
    ) );

    $wp_customize->add_setting( 'wcprc_reviews_wrapper' , array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'option',
        'sanitize_callback' => 'esc_html'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wcprc_reviews_wrapper', array(
        'label'           => __( 'Class or ID of Wrapper', 'wcprc' ),
        'description'     => __( 'Enter the class or ID of the product reviews wrapper from your theme.', 'wcprc' ),
    	'section'         => 'wcprc_settings',
        'settings'        => 'wcprc_reviews_wrapper',
        'input_attrs'     => array(
            'placeholder' => 'Ex: .comments, #comments etc.'
        ),
    ) ) );

    $wp_customize->add_setting( 'wcprc_carousel_options' , array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'option',
        'default'           =>
        'loop       : true,
margin     : 10,
nav        : false,
responsive : {
    0 : {
        items : 1
    },
    1000 : {
        items : 2
    }
}'
    ) );

    $wp_customize->add_control( new WP_Customize_Code_Editor_Control( $wp_customize, 'wcprc_carousel_options', array(
        'label'       => __( 'Custom Options', 'wcprc' ),
        'description' => __( 'Enter custom options for the carousel here. You can see available parameters <a href="https://owlcarousel2.github.io/OwlCarousel2/docs/api-options.html" target="_blank">here</a>', 'wcprc' ),
        'code_type'   => 'javascript',
        'settings'    => 'wcprc_carousel_options',
        'section'     => 'wcprc_settings',
    ) ) );
}

add_action( 'customize_register', 'wcprc_customizer_fields' );