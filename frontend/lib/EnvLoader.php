<?php
// frontend/lib/EnvLoader.php

class EnvLoader {
    public static function load($file = '.env') {
        if (!file_exists($file)) {
            return;
        }

        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos($line, '#') === 0) {
                continue; // Skip comments
            }

            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);

            if (!array_key_exists($name, $_ENV)) {
                putenv("$name=$value");
                $_ENV[$name] = $value;
            }
        }
    }
}
