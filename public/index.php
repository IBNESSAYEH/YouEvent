<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/core/config.php';

use App\core\App;

session_start();

App::loadController();


