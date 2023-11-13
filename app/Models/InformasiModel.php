<?php

namespace App\Models;

use CodeIgniter\Model;

class InformasiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'informasi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['judul_informasi','deskripsi_informasi', 'foto', 'id_blok'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    public function saveInformasi($data){
        $this->insert($data);
    }
    public function getInformasi($id=null){
        if($id != null){
            return $this->select('informasi.*, blok.nama_blok')->join('blok', 'blok.id=informasi.id_blok')->find($id);
        }
        return $this->select('informasi.*, blok.nama_blok')->join('blok', 'blok.id=informasi.id_blok')->findAll();
    }
    public function updateInformasi($data, $id){
        return $this->update($id, $data);
    }
    public function deleteInformasi($id){
        return $this->delete($id);
    }
}
