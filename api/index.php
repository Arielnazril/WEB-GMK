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
// HACK VERCEL: PAKSA STORAGE DAN VIEW COMPILER KE /tmp
// =========================================================
// 1. Ubah storage path utama
$app->useStoragePath('/tmp/storage');

// 2. Buat struktur folder secara paksa di memori sementara (RAM) Vercel
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

// 3. Blokade sistem cache view bawaan Laravel secara agresif
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
$_SERVER['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
// =========================================================

// Eksekusi request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);