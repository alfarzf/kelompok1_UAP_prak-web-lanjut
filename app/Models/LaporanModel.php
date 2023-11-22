<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'laporan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['jenis_laporan','deskripsi_laporan','id_warga', 'status_laporan'];

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

    public function saveLaporan($data){
        $this->insert($data);
    }
    public function getLaporan($id=null){
        if($id != null){
            return $this->select('laporan.*, warga.nama')->join('warga', 'warga.id=laporan.id_warga')->find($id);
        }
        return $this->select('laporan.*, warga.nama')->join('warga', 'warga.id=laporan.id_warga')->findAll();
    }
    public function updateLaporan($data, $id){
        return $this->update($id, $data);
    }
    public function deleteLaporan($id){
        return $this->delete($id);
    }

}
