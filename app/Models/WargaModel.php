<?php

namespace App\Models;

use CodeIgniter\Model;

class WargaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'warga';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama','nik','alamat','id_blok'];

    // Dates
    protected $useTimestamps = false;
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
    public function saveWarga($data){
        $this->insert($data);
    }
    public function getWarga($id=null){
        if($id != null){
            return $this->select('warga.*, blok.nama_blok')->join('blok', 'blok.id=warga.id_blok')->find($id);
        }
        return $this->select('warga.*, blok.nama_blok')->join('blok', 'blok.id=warga.id_blok')->findAll();
    }
    public function updateWarga($data, $id){
        return $this->update($id, $data);
    }
    public function deleteWarga($id){
        return $this->delete($id);
    }
}
