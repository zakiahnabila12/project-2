<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisKegiatanModel extends Model
{

    protected $table            = 'jenis_kegiatan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'nama'];

}
