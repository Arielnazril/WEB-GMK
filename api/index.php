<?php

// Panggil file pemaksa agar Vercel membawa folder views
require __DIR__ . '/vercel_preload.php';

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Cek apakah server sedang dalam status maintenance
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Load autoloader Composer
require __DIR__.'/../vendor/autoload.php';

// Load aplikasi Laravel
$app = require_once __DIR__.'/../bootstrap/app.php';

// =========================================================
// HACK VERCEL: Belokkan semua folder storage ke /tmp
// =========================================================
$app->useStoragePath($_ENV['APP_STORAGE'] ?? '/tmp/storage');

$storagePath = $app->storagePath();
foreach (['app', 'framework/views', 'framework/cache/data', 'framework/sessions', 'logs'] as $dir) {
    $path = $storagePath . '/' . $dir;
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
    }
}
// =========================================================

// Eksekusi request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);