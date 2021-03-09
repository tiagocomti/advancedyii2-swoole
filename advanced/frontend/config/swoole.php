<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../common/config/bootstrap.php';
require __DIR__ . '/../../frontend/config/bootstrap.php';


$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../../common/config/main.php',
    require __DIR__ . '/../config/main.php',
);

$config['components']['response']['class'] = swoole\foundation\web\Response::class;
$config['components']['request']['class'] = swoole\foundation\web\Request::class;
$config['components']['errorHandler']['class'] = swoole\foundation\web\ErrorHandler::class;

$newRules = [];

return $config;