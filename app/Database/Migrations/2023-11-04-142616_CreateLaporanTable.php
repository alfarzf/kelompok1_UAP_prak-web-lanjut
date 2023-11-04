<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLaporanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'jenis_laporan' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'deskripsi_laporan' => [
                'type' => 'VARCHAR',
                'constraint' => '10'
            ],
            'id_warga' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);
        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_warga', 'warga', 'id');
        $this->forge->createTable('laporan');
    }

    public function down()
    {
        $this->forge->dropTable('laporan', true);
    }
}
