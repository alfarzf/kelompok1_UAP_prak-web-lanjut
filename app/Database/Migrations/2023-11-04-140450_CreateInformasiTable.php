<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInformasiTable extends Migration
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
            'judul_informasi' => [
                'type' => 'VARCHAR',
                'constraint' => '128'
            ],
            'deskripsi_informasi' => [
                'type' => 'VARCHAR',
                'constraint' => '1024'
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'id_blok' => [
                'type' => 'INT',
                'constraint' => 5,
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
        ]
    );
        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_blok', 'blok', 'id');
        $this->forge->createTable('informasi');
    }

    public function down()
    {
        $this->forge->dropTable('informasi', true);
    }
}
