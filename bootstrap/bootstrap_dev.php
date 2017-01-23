<?php

use Silex\Application;
date_default_timezone_set('Asia/Shanghai');

require $root . '/vendor/autoload.php';

$config = require _DIR_ .'../../config/config_dev.php';


$app = new Application($config);

$app->run();