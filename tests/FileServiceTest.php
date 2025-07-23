<?php
use ManuFuhrmann\Upload\Services\FileService;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class FileServiceTest extends TestCase
{
    public static function fileSizeProvider(): array
    {
        return [
            '0 B' => [0, '0 B'],
            '10 B' => [10, '10 B'],
            '1 KB' => [1024, '1,00 KB'],
            '4 MB' => [4194304, '4,00 MB'],
            '4 GB' => [4294967296, '4,00 GB'],
        ];
    }

    #[DataProvider('fileSizeProvider')]
    public function testFileSizeConvert(int $input, string $expected): void
    {
        $fileService = new FileService();
        $this->assertEquals($expected, $fileService->fileSizeConvert($input));
    }
}
