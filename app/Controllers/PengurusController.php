<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\BlokModel;
use App\Models\InformasiModel;

class PengurusController extends BaseController
{
    public $blokModel;
    public $informasiModel;

    public function __construct(){
        $this->blokModel = new BlokModel();
        $this->informasiModel = new InformasiModel();
    }
    public function index()
    {
        return view('pengurus/home');
    }
#Blok
    public function blok()
    {
        $data = [
            // 'title' => 'List User',
            'bloks' => $this->blokModel->getBlok()
        ];
        return view('pengurus/blok', $data);
    }

    public function blok_create(){
        return view('pengurus/create_blok');
    }

    public function blok_store(){
        $data=[
            'nama_blok' => $this->request->getVar('nama_blok')
        ];
        $this->blokModel->saveBlok($data);
        return redirect()->to('/pengurus/blok');
    }

    public function blok_destroy($id){
        $this->blokModel->deleteBlok($id);
        return redirect()->to('/pengurus/blok');
    }

    public function blok_edit($id){
        $data=[
            'blok' => $this->blokModel->getBlok($id)
        ];
        return view('pengurus/edit_blok', $data);
    }

    public function blok_update($id){
        $data = [
            'nama_blok' => $this->request->getVar('nama_blok')
        ];
        $result = $this->blokModel->updateBlok($data, $id);
        if(!$result){
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }
        return redirect()->to('/pengurus/blok');
    }
#Informasi
public function informasi()
    {
        $data = [
            // 'title' => 'List User',
            'informasis' => $this->informasiModel->getinformasi()
        ];
        return view('pengurus/informasi', $data);
    }

    public function informasi_create(){
        $data = [
            // 'title' => 'List User',
            'bloks' => $this->blokModel->getBlok()
        ];
        return view('pengurus/create_informasi', $data);
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
        return redirect()->to('/pengurus/informasi');
    }

    public function informasi_destroy($id){
        $this->informasiModel->deleteInformasi($id);
        return redirect()->to('/pengurus/informasi');
    }

    public function informasi_edit($id){
        $data=[
            'informasi' => $this->informasiModel->getInformasi($id),
            'bloks' => $this->blokModel->getBlok()
        ];
        return view('pengurus/edit_informasi', $data);
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
        return redirect()->to('/pengurus/informasi');
    }
    
}