<?php
#inlcude routes file
require_once __DIR__ . "/../config/Config.php";
require_once __DIR__ . "/../routes/routes.php";

#include the all controller files
use App\Http\Controller\Controller;
use App\Libraries\Route;
use App\Http\controller\TestController;


#instantiate controller
$init = new Core();
