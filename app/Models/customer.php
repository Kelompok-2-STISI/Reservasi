<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\kamar;

class customer extends Model
{
    protected $table      = 'customer';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nama', 'nik', 'no_hp', 'id_negara'];
}
