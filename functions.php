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

/*
 * Your Main Theme Setup is loaded right here. It's the perfect
 * place for that features that are stable enough and do not
 * change too much.
 */
require_once( 'inc/ugallu.php' );
Ugallu::get_instance();

/*
 * Your Custom Theme setup starts right here. So play with it
 * as usual. Once some features are done, tested and stable
 * enough you can move them to the Main Theme Setup that was
 * loaded right before.
 *
 * This approach is fine 'cause you can keep this file clean
 * and easy to read. Touch the Main Theme Setup only when
 * really necessary. It's the perfect math to keep your
 * child theme stable while doing experiments live for our clients.
 */
add_action( 'after_setup_theme', 'ugallu_setup' );

/**
 * The Custom Theme Setup
 */
function ugallu_setup()
{

}
