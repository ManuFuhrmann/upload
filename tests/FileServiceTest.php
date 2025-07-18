<?php

use ManuFuhrmann\Upload\Services\FileService;
use PHPUnit\Framework\TestCase;

class FileServiceTest extends TestCase
{
    public function testFileSizeConvert_0()
    {
        $fileService = new FileService();
        $this->assertEquals('0 B', $fileService->fileSizeConvert(0));
        $this->assertEquals('0 B', $fileService->fileSizeConvert(10));
    }
}
