<?php
/**
 * "Who am I? Why am I here? A king with no name. A borrowed castle. My subjects are mindless drones.
 * If this is the mandate of Heaven I have been given...I fear...I fear nothing...except the tedium
 * that it will bring!!!" ~ Meruem
 *
 * @package    Ugallu
 * @version    0.1.0
 * @author     Thiago Senna <thiago@nuvempress.com.br>
 * @copyright  Copyright (c) 2014, Thiago Senna
 * @link       https://github.com/nuvempress/ugallu
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * Class Ugallu
 */
abstract class Ugallu
{
    static function setup()
    {
        add_action( 'after_setup_theme', array( __CLASS__, 'after_setup_theme' ) );
        add_filter( 'theme_mod_color_primary', array( __CLASS__, 'color_primary' ) );
        add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_fonts' ) );
    }

    /**
     * After Setup Theme
     */
    static function after_setup_theme()
    {
        add_theme_support( 'custom-background', array(
            'default-color' => '3c3a3a',
        ) );

        add_theme_support( 'custom-header', array(
            'default-image'      => '',
            'default-text-color' => '584338',
        ) );

        add_filter( 'theme_mod_background_color', array( __CLASS__, 'background_color' ), 95 );
    }

    /**
     * Color Primary
     */
    static function color_primary( $hex )
    {
        return $hex ? $hex : 'a82626';
    }

    /**
     * Enqueue Fonts
     */
    static function enqueue_fonts()
    {
        wp_enqueue_style( 'google-fonts-pt-sans', 'http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' );
        wp_enqueue_style( 'google-fonts-yellowtail', 'http://fonts.googleapis.com/css?family=Yellowtail' );
    }

    /**
     * If the color is `fcf9f4`, return an empty string for the background color.
     */
    function background_color( $color )
    {
        return in_array( $color, array( '', 'fcf9f4' ) ) ? 'eee8df' : $color;
    }

}

// Setup
Ugallu::setup();