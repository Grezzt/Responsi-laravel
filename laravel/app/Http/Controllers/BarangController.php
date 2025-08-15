<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        // method untuk menampilkan daftar seluruh barang
    }

    public function create()
    {
        // method untuk menampilkan form tambah barang
    }

    public function store(Request $request)
    {
        // method untuk menyimpan data barang baru
    }

    public function edit($id)
    {
        // method untuk menampilkan form edit barang
    }

    public function update(Request $request, $id)
    {
        // method untuk mengupdate data barang
    }

    public function destroy($id)
    {
        // method untuk menghapus data barang
    }

    // Fitur tambahan simpan dibawah sini :

    // public function fitur_baru()
    // {

    // }
}
