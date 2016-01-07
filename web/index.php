<?php
/**
 * Created by PhpStorm.
 * User: pw
 * Date: 06.01.16
 * Time: 18:50
 */

require "../vendor/autoload.php";


$file = "test.json";

$controller = new \FileReader\Controller\FileReaderController();
$controller->fileReadAction($file);
