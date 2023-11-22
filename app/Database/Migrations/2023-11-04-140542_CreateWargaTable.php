<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateWargaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'nik' => [
                'type' => 'VARCHAR',
                'constraint' => 16,
                'unsigned' => true
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
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
        ]);
        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_blok', 'blok', 'id');
        $this->forge->createTable('warga');
    }

    public function down()
    {
        $this->forge->dropTable('warga', true);
    }
}
