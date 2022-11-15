<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\kamar;

class jenis extends Model
{
    protected $table      = 'jenis_kamar';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['jenis', 'tarif', 'desc'];
}
