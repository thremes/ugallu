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
            'default-image' => '',
        ) );
    }

    /**
     * Color Primary
     */
    static function color_primary( $hex )
    {
        return $hex ? $hex : 'a82626';
    }

}

// Setup
Ugallu::setup();