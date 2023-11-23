<?php
spl_autoload_extensions(".php");
spl_autoload_register(function ($class) {
    $base_dir = __DIR__ . '/src/';
    $file = $base_dir . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)){
        require $file;
    }
});

$mcdonalds = new Restaurant([new Cashier(1, 6000), new Chef(2, 7222)]);

$fumio = new Customer();

$fumiosInvoice = $fumio->order($mcdonalds);
echo $fumiosInvoice->getClassVariable('finalPrice') . $fumiosInvoice->getClassVariable('orderTime') . $fumiosInvoice->getClassVariable('estimatedTimeInMinutes') ;
