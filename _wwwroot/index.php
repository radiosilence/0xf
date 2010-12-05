<?php
//if(str_replace('www.',null,$_SERVER['HTTP_HOST']) == 'jonathan-sharp.co.uk')
//     die("Coming soon!");
/** 
 * Das index, ja?
 */

require('core_path.php');
require(CORE_PATH . '/core.php');

import('core.routing');

$router = new \Core\Router;
$router->route($_GET['route']);

