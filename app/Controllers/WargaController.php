<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\LaporanModel;
use App\Models\InformasiModel;

class WargaController extends BaseController
{
    public $laporanModel;
    public $wargaModel;

    public function __construct(){
        $this->laporanModel = new LaporanModel();
    }
    public function index()
    {
        return view('warga/home_warga');
    }

    public function laporan_create(){
        // $this->laporanModel->saveLaporan([
        //     'jenis_laporan' => $this->request->getVar('jenis_laporan'),
        //     'deskripsi_laporan' => $this->request->getVar('deskripsi_laporan'),
        
        // ]);
        // $jenis_laporan = $this->request->getVar('jenis_laporan');
        // $deskripsi_laporan = $this->request->getVar('deskripsi_laporan');
    
      
        // dd($this->request->getVar("deskripsi_laporan"));    
        // $data = [
        //     'jenis_laporan' => $jenis_laporan,
        //     'deskripsi_laporan' => $deskripsi_laporan,
        // ];
    
        // $this->laporanModel->saveLaporan($data);
        // return redirect()->to(base_url('warga/create_laporan'));
        
        return view('warga/create_laporan');
    }
    public function laporan_save(){
        $this->laporanModel->saveLaporan([
            'jenis_laporan' => $this->request->getVar('jenis_laporan'),
            'deskripsi_laporan' => $this->request->getVar('deskripsi_laporan'),
            'id_warga' => user_id(),
            'status_laporan' => 'Belum Terverifikasi'
        ]);
        // $jenis_laporan = $this->request->getVar('jenis_laporan');
        // $deskripsi_laporan = $this->request->getVar('deskripsi_laporan');
    
      
        // dd($this->request->getVar("deskripsi_laporan"));    
        // $data = [
        //     'jenis_laporan' => $jenis_laporan,
        //     'deskripsi_laporan' => $deskripsi_laporan,
        // ];
    
        // $this->laporanModel->saveLaporan($data);
        // return redirect()->to(base_url('warga/create_laporan'));
        return redirect()->to(base_url('warga/laporan/create'))->with('message', 'Berhasil Membuat Laporan');
        // return view('warga/create_laporan');
    }

    
    public function informasi(){
        $model = new InformasiModel();
        $data = $model->select("informasi.*,nama_blok")->join('blok','id_blok=blok.id')->findAll();
        //dd($data);
        return view('warga/informasi',["informasi"=>$data]);
    }
    
}