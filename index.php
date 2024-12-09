<?php
session_start();

require "core/helper.php";
require "core/View.php";
require "core/App.php";
require "core/Router.php";
require "core/Route.php";
require "core/Redirect.php";

use Core\App;
use Core\Router;
use Core\Redirect;

$app = App::getInstance();

$app->registerService('router', Router::getInstance());
$app->registerService('routes', require "routes/web.php");
$app->registerService('redirect', Redirect::getInstance());

$app->run();

