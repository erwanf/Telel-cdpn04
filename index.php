<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 11/06/2015
 * Time: 09:41
 */

require_once("autoload.php");

use Controller\Router;

$router = new Router();
$router->routerRequest();