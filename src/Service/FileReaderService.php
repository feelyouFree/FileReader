<?php
/**
 * Created by PhpStorm.
 * User: pw
 * Date: 06.01.16
 * Time: 18:21
 */

namespace FileReader\Service;

class FileReaderService {
    private $fileReaderService;

    public function __construct( IFileReader $fileReader) {
        $this->fileReaderService = $fileReader;
    }

    public function fileRead($filepath) {
        return $this->fileReaderService->read($filepath);
    }
}