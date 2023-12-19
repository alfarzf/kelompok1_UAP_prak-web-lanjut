<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\BlokModel;
use App\Models\InformasiModel;
use App\Models\LaporanModel;
use App\Models\WargaModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class AdminController extends BaseController
{
    public $blokModel;
    public $informasiModel;
    public $laporanModel;
    public $wargaModel;

    public function __construct(){
        $this->blokModel = new BlokModel();
        $this->informasiModel = new InformasiModel();
        $this->laporanModel = new LaporanModel();
        $this->wargaModel = new WargaModel();
    }
    public function index()
    {
        return view('admin/super_admin');
    }

    public function daftar_warga()
    {
        return view('admin/daftar_warga');
    }

    public function add_akun()
    {
        return view('admin/add_akun');
    }
    public function informasi()
    {
        $data = [
            // 'title' => 'List User',
            'informasis' => $this->informasiModel->getinformasi()
        ];
        return view('admin/informasi', $data);
    }

    public function informasi_create(){
        $data = [
            // 'title' => 'List User',
            'bloks' => $this->blokModel->getBlok()
        ];
        return view('admin/create_informasi', $data);
    }

    public function informasi_store(){
        $data=[
            'judul_informasi' => $this->request->getVar('judul_informasi'),
            'deskripsi_informasi' => $this->request->getVar('deskripsi_informasi'),
            'id_blok' => $this->request->getVar('blok'),
            // 'nama_informasi' => $this->request->getVar('nama_informasi'),
        ];
        $path='assets/uploads/img/';
        $foto=$this->request->getFile('foto');
        if($foto->isValid()){
            $name = $foto->getRandomName();
            if($foto->move($path, $name)){
                $foto = base_url($path . $name);
                $data['foto']=$foto;
            }
        }

        $this->informasiModel->saveInformasi($data);
        return redirect()->to('/admin/informasi');
    }

    public function informasi_destroy($id){
        $this->informasiModel->deleteInformasi($id);
        return redirect()->to('/admin/informasi');
    }

    public function informasi_edit($id){
        $data=[
            'informasi' => $this->informasiModel->getInformasi($id),
            'bloks' => $this->blokModel->getBlok()
        ];
        return view('admin/edit_informasi', $data);
    }

    public function informasi_update($id){
        $data=[
            'judul_informasi' => $this->request->getVar('judul_informasi'),
            'deskripsi_informasi' => $this->request->getVar('deskripsi_informasi'),
            'id_blok' => $this->request->getVar('blok'),
            // 'nama_informasi' => $this->request->getVar('nama_informasi'),
        ];
        $path='assets/uploads/img/';
        $foto=$this->request->getFile('foto');
        if($foto->isValid()){
            $name = $foto->getRandomName();
            if($foto->move($path, $name)){
                $foto = base_url($path . $name);
                $data['foto']=$foto;
            }
        }
        $result = $this->informasiModel->updateInformasi($data, $id);
        if(!$result){
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }
        return redirect()->to('/admin/informasi');
    }

    #Laporan
    public function laporan()
    {
        $data = [
            // 'title' => 'List User',
            'laporans' => $this->laporanModel->getLaporan()
        ];
        return view('admin/laporan', $data);
    }

    public function laporan_create(){
        $data = [
            // 'title' => 'List User',
            'warga' => $this->wargaModel->getWarga()
        ];
        return view('admin/create_laporan', $data);
    }

    public function laporan_store(){
        $data=[
            'jenis_laporan' => $this->request->getVar('jenis_laporan'),
            'deskripsi_laporan' => $this->request->getVar('deskripsi_laporan'),
            'id_warga' => $this->request->getVar('pelapor'),
            'status_laporan' => 'Belum Terverifikasi'
        ];

        $this->laporanModel->saveLaporan($data);
        return redirect()->to('/admin/laporan');
    }

    public function laporan_destroy($id){
        $this->laporanModel->deleteLaporan($id);
        return redirect()->to('/admin/laporan');
    }

    public function laporan_edit($id){
        $data=[
            'laporan' => $this->laporanModel->getLaporan($id),
            // 'bloks' => $this->blokModel->getBlok()
        ];
        return view('admin/edit_laporan', $data);
    }

    public function laporan_update($id){
        $data=[
            'status_laporan' => $this->request->getVar('status_laporan')
        ];
        $result = $this->laporanModel->updateLaporan($data, $id);
        if(!$result){
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }
        return redirect()->to('/admin/laporan');
    }
    public function export(){
        $data = $this->laporanModel->getLaporan();
        $fileName = 'laporan.xlsx';  
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Jenis Laporan');
        $sheet->setCellValue('B1', 'Deskripsi Laporan');
        $sheet->setCellValue('C1', 'Pelapor');
        $sheet->setCellValue('D1', 'Status Laporan');
        
        $rows = 2;
        foreach ($data as $item){
            $sheet->setCellValue('A' . $rows, $item['jenis_laporan']);
            $sheet->setCellValue('B' . $rows, $item['deskripsi_laporan']);
            $sheet->setCellValue('C' . $rows, $item['nama']);
            $sheet->setCellValue('D' . $rows, $item['status_laporan']);
            $rows++;
        } 

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename=' . $fileName);
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;

        // return redirect()->to('/pengurus/laporan');
    }
}
