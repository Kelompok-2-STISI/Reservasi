<?php

namespace App\Models;

use CodeIgniter\Model;

class kamar extends Model
{
    protected $table      = 'kamar';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nama_kamar', 'nomor_kamar', 'id_jenis_kamar', 'status'];

    public function getKamar()
    {
        return $this->findAll();
    }
}
