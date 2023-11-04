<?php

namespace App\Database\Seeds;
use App\Models\BlokModel;
use CodeIgniter\Database\Seeder;

class BlokSeeder extends Seeder
{
    public function run()
    {
        $blokModel = new BlokModel();
        $blokModel->save([
            'nama_blok' => 'A'
        ]);
        $blokModel->save([
            'nama_blok' => 'B'
        ]);
        $blokModel->save([
            'nama_blok' => 'C'
        ]);
        $blokModel->save([
            'nama_blok' => 'D'
        ]);
        $blokModel->save([
            'nama_blok' => 'E'
        ]);
        $blokModel->save([
            'nama_blok' => 'F'
        ]);
        $blokModel->save([
            'nama_blok' => 'G'
        ]);
    }
}
