<?php

/**
 * Class Ugallu
 *
 * The Main Theme Setup - the perfect place for your stable stuff.
 */
final class Ugallu
{
    /**
     * The Constructor
     */
    private function __construct()
    {
        add_action( 'after_setup_theme', array( $this, 'setup_theme' ) );
    }

    /**
     * Get the instance.
     *
     * @return Ugallu
     */
    static function get_instance()
    {
        static $instance;
        if ( !isset( $instance ) ) {
            $instance = new Ugallu();
        }

        return $instance;
    }

    /**
     * After Setup Theme
     */
    function setup_theme()
    {
        add_theme_support( 'custom-background', array(
            'default-color' => '3c3a3a',
        ) );

        add_theme_support( 'custom-header', array(
            'default-image'      => '',
            'default-text-color' => '584338',
        ) );

        add_filter( 'theme_mod_color_primary', array( $this, 'color_primary' ) );
        add_filter( 'theme_mod_background_color', array( $this, 'background_color' ), 96 );

        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_fonts' ) );
    }

    /**
     * Color Primary
     */
    function color_primary( $hex )
    {
        return $hex ? $hex : 'a82626';
    }

    /**
     * If the color is empty or `fcf9f4`, return the color 'eee8df' for the background color.
     */
    function background_color( $color )
    {
        return in_array( $color, array( '', 'fcf9f4' ) ) ? 'eee8df' : $color;
    }

    /**
     * Enqueue Fonts
     */
    function enqueue_fonts()
    {
        wp_enqueue_style( 'google-fonts-pt-sans', 'http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' );
        wp_enqueue_style( 'google-fonts-yellowtail', 'http://fonts.googleapis.com/css?family=Yellowtail' );
    }

}