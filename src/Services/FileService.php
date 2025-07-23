<?php

/**
 * This service contains some functions for file and directory handling
 *
 * @package ManuFuhrmann\Upload\Services
 * @author Manuel Fuhrmann <manu.fuhrmann@arcor.de>
 */

namespace ManuFuhrmann\Upload\Services;

class FileService
{
    /**
     * Returns readable file size with value
     *
     * @param $bytes
     * @return string
     */
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

        foreach ($arBytes as $key => $byte) {
            if ($bytes >= pow(1024, $key)) {
                $result = $bytes / pow(1024, $key);
                $result = str_replace(".", ",", strval(round($result, 2))) . " " . $byte;
                break;
            } elseif ($bytes == 0) {
                $result = '0 B';
            }
        }
        return $result;
    }
}
