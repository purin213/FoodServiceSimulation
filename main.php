<?php
spl_autoload_extensions(".php");
spl_autoload_extensions(function ($class) {
    $base_dir = __DIR__ . '/src/';
    $file = $base_dir . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)){
    require $file;
    }
});
