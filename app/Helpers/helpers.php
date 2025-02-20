<?php

if (! function_exists('recursive_include_files')) {
    function recursive_include_files($path): void
    {
        $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));

        $it->rewind();

        while ($it->valid()) {
            try {
                if (! $it->isDot() && $it->isFile() && $it->getExtension() === 'php') {
                    include_once $it->key();
                }
            } catch (Exception $e) {
                throw new RuntimeException('Системна грешка при обработката на файла: '.$it->key().'. Оригинална грешка: '.$e->getMessage());
            }

            $it->next();
        }

    }
}
