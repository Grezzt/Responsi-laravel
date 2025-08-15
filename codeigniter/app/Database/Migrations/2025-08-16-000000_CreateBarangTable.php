<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBarangTable extends Migration
{
  public function up()
  {
    $this->forge->addField([
      // Schema tabel barang
    ]);
    // $this->forge->addKey('id', true);
    $this->forge->createTable('barang');
  }

  public function down()
  {
    $this->forge->dropTable('barang');
  }
}
