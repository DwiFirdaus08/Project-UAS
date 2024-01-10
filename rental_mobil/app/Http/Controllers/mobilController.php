<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class mobilController extends Controller
{
    Mobil::create([
        'no_plat' => 'N34234',
        'merk' => '',
        'harga' => 200000,
        'deskripsi' => 'Apa aja',
        'status' => 'Tidak Tersedia',
        'gambar' => '.jpeg',
    ]);
    
    Mobil::create([
        'no_plat' => 'N 1232 BKT',
        'merk' => '',
        'harga' => 500000,
        'deskripsi' => 'Baru',
        'status' => 'Tersedia',
        'gambar' => '.jpg',
    ]);
}
