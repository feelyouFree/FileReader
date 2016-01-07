<?php
/**
 * Created by PhpStorm.
 * User: pw
 * Date: 06.01.16
 * Time: 18:25
 */

namespace FileReader;
use FileReader\IFileReader;

class JsonFileReader implements IFileReader
{

    private $file;

    public function __construct(string $filepath)
    {
      $this->file = $filepath;
    }

    public function read()
    {
        return json_decode(file_get_contents($this->file), true);
    }

    public function parse()
    {
        // TODO: Implement parse() method.
    }
}