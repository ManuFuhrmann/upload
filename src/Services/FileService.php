<?php
namespace ManuFuhrmann\Upload\Services;

class FileService
{
    public function fileSizeConvert($bytes)
    {
        $bytes = floatval($bytes);
        $arBytes = array(
            "B",
            "KB",
            "MB",
            "GB",
            "TB",
        );

        foreach($arBytes as $key => $byte) {
            if($bytes >= pow(1024, $key)) {
                $result = $bytes / pow(1024, $key);
                $result = str_replace(".", "," , strval(round($result, 2)))." ".$byte;
                break;
            } else if ($bytes == 0) {
                $result = '0 B';
            }
        }
        return $result;
    }
}