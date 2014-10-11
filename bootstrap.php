<?php

/*
 * @package: RichCommerce
 * @version: 1.0
 * @since: 13 Sept, 2014
 */

/*
 * ------------------------------------------------------
 *  Return false if application is started in CLI Server
 * ------------------------------------------------------
 */

if (php_sapi_name() === 'cli-server' || php_sapi_name() === 'cli') {
    return false;
}

/*
 * include common file
 */
require __DIR__ . '/config/common.php';

/*
 * compare php version
 */
if (!is_php())
    return false;

/*
 * --------------------------------------------------------------
 * Include autoloader
 * --------------------------------------------------------------
 */
$loader = require BASEPATH . '/vendor/autoload.php';
$app = new \Rich\Foundation\Application();
$app->test();
exit;
return;
/*
 * ------------------------------------------------------
 *  load constants
 * ------------------------------------------------------
 */
Autoload::requireFile("constants", "config", true);

/*
 * ------------------------------------------------------
 * 	include collection class
 * ------------------------------------------------------
 */
Autoload::requireFile("Rich", "system/core");

use System\Core\Rich;

/*
 * ------------------------------------------------------
 * include base controller
 * ------------------------------------------------------
 */
Autoload::requireFile("BaseController", "system/core");

/*
 * ------------------------------------------------------
 * include URI Helper
 * ------------------------------------------------------
 */
Autoload::requireFile("Uri", "system/helpers");

/*
 * ------------------------------------------------------
 * 	create uri helper object 
 * ------------------------------------------------------
 */
$uri = new URI();

Autoload::requireFile("Theme", "system/helpers");

/*
 * ------------------------------------------------------
 * 	create router and add it to collection class
 * ------------------------------------------------------
 */

$router = new \system\core\Router();
Rich::set("router", $router);

/*
 * ------------------------------------------------------
 * 	map application using router
 * ------------------------------------------------------
 */
Autoload::requireFile("app-map", "system/core");

// ./system/bootstrap.php
