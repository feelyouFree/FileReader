<?php
/**
 * Created by PhpStorm.
 * User: pw
 * Date: 06.01.16
 * Time: 18:35
 */

namespace FileReader\Controller;

use DI\ContainerBuilder;

class FileReaderController
{
    public function fileReadAction( $filepath )
    {

        $fileService = $container->get('FileReaderService');


    }

}
