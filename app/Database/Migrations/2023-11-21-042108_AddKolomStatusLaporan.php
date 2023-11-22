<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddKolomStatusLaporan extends Migration
{
    public function up()
    {
        $this->forge->addColumn('laporan',[
            'status_laporan' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => true
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('laporan', ['status_laporan']);
    }
}
