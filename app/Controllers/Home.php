<?php

namespace App\Controllers;

use App\Models\KegiatanModel;

class Home extends BaseController
{
    protected $kegiatan;
    
    public function __construct() {
       $this->kegiatan = new KegiatanModel();
    }

    public function event()
    {   
		$data['kegiatan'] = $this->kegiatan->findAll();
		return view('frontend/index', $data);
        
    }

    public function detail($id = null)
    {
        $data['kegiatan'] = $this->kegiatan->where('id', $id)->first();
        return view('frontend/detail', $data);
    }

    public function index()
    {
        // return view('backend/dashboard');
        return view('frontend/index');
    }
}
