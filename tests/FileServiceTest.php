<?php

use PHPUnit\Framework\TestCase;
use ManuFuhrmann\Upload\FileService;

class FileServiceTest extends TestCase
{
    public function testFileSizeConvert_0()
    {
        $fileService = new FileService();
        $this->assertEquals('0 B', $fileService->fileSizeConvert(0));
    }
}