<?php

// Memanggil file pemaksa agar Vercel membaca folder views
require __DIR__ . '/vercel_preload.php';

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Cek status maintenance
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Load Composer autoloader
require __DIR__.'/../vendor/autoload.php';

// Instantiate Aplikasi Laravel
$app = require_once __DIR__.'/../bootstrap/app.php';

// =========================================================
// INTERVENSI VERCEL SERVERLESS FILE SYSTEM
// =========================================================

// 1. Ubah direktori utama ke RAM sementara (/tmp)
$app->useStoragePath('/tmp/storage');

// 2. Bangun struktur kerangka folder di dalam RAM
$dirs = [
    '/tmp/storage/app',
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs'
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

// 3. INTERVENSI MUTLAK (DI SINI KUNCI PENYELESAIANNYA)
// Cegat sistem konfigurasi dan timpa value secara paksa di memori
$app->afterResolving('config', function ($config) {
    $config->set('view.compiled', '/tmp/storage/framework/views');
    $config->set('session.files', '/tmp/storage/framework/sessions');
    $config->set('cache.stores.file.path', '/tmp/storage/framework/cache/data');
    $config->set('logging.channels.single.path', '/tmp/storage/logs/laravel.log');
    $config->set('logging.channels.daily.path', '/tmp/storage/logs/laravel.log');
});
// =========================================================

// Eksekusi HTTP Request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);