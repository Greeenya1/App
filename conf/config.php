<?php
session_start();

define("ROOT", "W:/domains/php/Testmanao"); //корневая директория
define("CONTROLLER_PATH", ROOT. "/controllers/");
define("MODEL_PATH", ROOT. "/models/");
define("VIEW_PATH", ROOT. "/views/");

require_once ("dp.php");
require_once ("route.php");
require_once MODEL_PATH.'Model.php';
require_once CONTROLLER_PATH.'Controller.php';
require_once VIEW_PATH.'View.php';

Routing::buildRoute();