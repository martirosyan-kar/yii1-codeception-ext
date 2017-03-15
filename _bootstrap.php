<?php
// This is global bootstrap for autoloading
/*require(__DIR__ . '../../common/config/api-config.php');*/
define('FRONTEND', realpath(__DIR__ . '/../'));
require_once __DIR__.'/../../vendor/codeception/yii-bridge/yiit.php';
// disable deep cloning of properties inside specify block
\Codeception\Specify\Config::setDeepClone(false);