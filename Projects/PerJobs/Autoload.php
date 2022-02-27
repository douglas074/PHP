<?php

    spl_autoload_register(function (string $fullName) {
        if (strpos($fullName, 'CPF') !== false) {
            $filePath = str_replace('PHP\\Projects\\PerJobs\\', './', $fullName);
            $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $filePath);
            $filePath .= '.php';
        }
        $filePath = str_replace('PHP\\Projects\\PerJobs\\', './', $fullName);
        $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $filePath);
        $filePath .= '.php';

        if (file_exists($filePath)) {
            require_once $filePath;
        } else {
            echo "FilePath not found..." . PHP_EOL . " Path: $filePath" . PHP_EOL;
        }
    });
