<?php
/**
 * Created by PhpStorm.
 * User: pw
 * Date: 06.01.16
 * Time: 18:21
 */

namespace FileReader;


interface IFileReader
{
   public function read();
   public function parse();
}