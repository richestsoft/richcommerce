<?php

/*
 * @package: RichCommerce
 * @version: 1.0
 * @since: 13 Sept, 2014
 */

/*
 * declare micro-timer 
 * @return float
 */
if (!function_exists('microtime_float')) {

    function microtime_float() {
        list($usec, $sec) = explode(" ", microtime());
        $sec = substr($sec, 0, 2);
        $usec = substr($usec, 0, 4);
        return ((float) $usec + (float) $sec);
    }

}

/*
 * declare application start time 
 */
if (!defined("RSTART"))
    define("RSTART", microtime_float());

/*
 * ------------------------------------
 * Define Base path of the application
 * ------------------------------------
 */

if (!defined("BASEPATH"))
    define("BASEPATH", __DIR__);

/*
 * ------------------------------------
 * Define DIRECTORY_SEPARATOR short hand
 * ------------------------------------
 */

if (!defined("DS"))
    define("DS",DIRECTORY_SEPARATOR);


/*
 * ------------------------------------
 * lets fire the thunder bird
 * @include boostrap.php to boot system
 * ------------------------------------
 */
require_once __DIR__ . '/bootstrap.php';

// ./index.php;
