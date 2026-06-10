<?php
// File ini hanya berfungsi untuk memaksa Vercel mendeteksi
// dan menyertakan folder penting ke dalam build serverless.

// Jangan pernah mengeksekusi ini secara nyata.
if (false) {
    require __DIR__ . '/../resources/views/welcome.blade.php';
    require __DIR__ . '/../routes/web.php';
    require __DIR__ . '/../config/app.php';
}