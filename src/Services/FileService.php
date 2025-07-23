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
    public function fileSizeConvert($bytes): string
    {
        if ($bytes === 0) {
            return '0 B';
        }

        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        $i = floor(log($bytes, 1024));
        $value = $bytes / pow(1024, $i);

        // Format auf Deutsch: Komma statt Punkt
        if ($i == 0) {
            $formatted = $value;
        } else {
            $formatted = number_format($value, 2, ',', '');
        }

        return $formatted . ' ' . $units[$i];
    }
}
