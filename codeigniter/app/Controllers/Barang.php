<?php

namespace App\Controllers;

use App\Models\BarangModel;
use CodeIgniter\HTTP\RedirectResponse;

class Barang extends BaseController
{
  protected $barangModel;

  public function __construct()
  {
    $this->barangModel = new BarangModel();
  }

  public function index()
  {
    // method untuk menampilkan daftar seluruh barang
  }

  public function create()
  {
    // method untuk menampilkan form tambah barang
  }

  public function store()
  {
    // method untuk menyimpan data barang baru
  }
  public function edit($id)
  {
    // method untuk menampilkan form edit barang
  }

  public function update($id)
  {
    // method untuk mengupdate data barang
  }

  public function delete($id)
  {
    // method untuk menghapus data barang
  }
}
