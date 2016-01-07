<?php
/**
 * Created by PhpStorm.
 * User: pw
 * Date: 07.01.16
 * Time: 18:32
 */
/**
 * The bootstrap file creates and returns the container.
 */
use DI\ContainerBuilder;

require __DIR__ . '/../vendor/autoload.php';
$containerBuilder = new ContainerBuilder;
$containerBuilder->addDefinitions(__DIR__ . '/config.php');
$container = $containerBuilder->build();
return $container;