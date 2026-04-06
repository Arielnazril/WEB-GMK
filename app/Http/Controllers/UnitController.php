<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Halaman Utama Unit
     */
    public function tk()
    {
        // Membuka resources/views/unit/tk.blade.php
        return view('unit.tk');
    }

    public function sd()
    {
        // Membuka resources/views/unit/sd.blade.php
        return view('unit.sd');
    }

    public function smp()
    {
        // Membuka resources/views/unit/smp.blade.php
        return view('unit.smp');
    }

    /**
     * Sub-Halaman TK (Sesuai folder layouts/tk di screenshot)
     */
    public function tkKurikulum()
    {
        // Membuka resources/views/layouts/tk/kurikulum.blade.php
        return view('layouts.tk.kurikulum');
    }

    public function tkFasilitas()
    {
        // Membuka resources/views/layouts/tk/fasilitas.blade.php
        return view('layouts.tk.fasilitas');
    }

    public function tkEkskul()
    {
        // Membuka resources/views/layouts/tk/ekskul.blade.php
        return view('layouts.tk.ekskul');
    }

    public function tkPendaftaran()
    {
        // Membuka resources/views/layouts/tk/pendaftaran.blade.php
        return view('layouts.tk.pendaftaran');
    }
}