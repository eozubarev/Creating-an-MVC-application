<?php


define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("CONTROLLER_PATH", ROOT. "/controllers/");
define("MODEL_PATH", ROOT. "/models/");
define("VIEW_PATH", ROOT. "/views/");

require_once("db.php");
require_once("route.php");
require_once MODEL_PATH. 'model.php';
require_once VIEW_PATH. 'view.php';
require_once CONTROLLER_PATH. 'controller.php';

Routing::buildRoute();
