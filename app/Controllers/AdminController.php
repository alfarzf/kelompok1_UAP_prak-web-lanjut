<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\WargaModel;
use App\Models\BlokModel;

class AdminController extends BaseController
{
    protected $wargaModel;
    protected $blokModel;

    public function __construct()
    {
        $this->wargaModel = new WargaModel();
        $this->blokModel = new BlokModel();
    }
    public function index()
    {
        return view('admin/super_admin');
    }

    public function daftar_warga()
    {
        $wargaModel = new WargaModel();
        $data['daftar_warga'] = $wargaModel->findAll(); // Mendapatkan semua data warga

        return view('admin/daftar_warga', $data);
    }

    public function create_warga()
    {
        $blokModel = new BlokModel();
        $blok = $blokModel->findAll();

        $data = [
            'blok' => $blok,
        ];
        return view('admin/create_warga', $data);
    }

    public function edit_warga($id)
    {
    $wargaModel = new WargaModel();
    $warga = $wargaModel->find($id);

    if (!$warga) {
        // Tambahkan penanganan jika warga tidak ditemukan, misalnya, redirect atau tampilkan pesan kesalahan.
        return redirect()->to('/daftar_warga')->with('error', 'Warga tidak ditemukan.');
    }

    $blokModel = new BlokModel();
    $blok = $blokModel->findAll();

    $data = [
        'warga' => $warga,
        'blok' => $blok,
    ];

    return view('admin/edit_warga', $data);
    }


    public function store()
    {
        $wargaModel = new WargaModel();

        $wargaModel->saveWarga([
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'id_blok' => $this->request->getVar('blok'),
            'alamat' => $this->request->getVar('alamat'),
        ]);

        return redirect()->to(base_url('/daftar_warga'))->with('success', 'Data warga berhasil ditambahkan.');
    }

    public function update()
    {
        $wargaModel = new WargaModel();

        $wargaModel->updateWarga(
            [
                'nama' => $this->request->getVar('nama'),
                'nik' => $this->request->getVar('nik'),
                'id_blok' => $this->request->getVar('blok'),
                'alamat' => $this->request->getVar('alamat'),
            ],
            $this->request->getVar('id')
        );

        return redirect()->to(base_url('/daftar_warga'))->with('success', 'Data warga berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $wargaModel = new WargaModel();

        $wargaModel->deleteWarga($id);

        return redirect()->to(base_url('/daftar_warga'))->with('success', 'Data warga berhasil dihapus.');
    }

    public function add_akun()
    {
        return view('admin/add_akun');
    }
}
