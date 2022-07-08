<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\KegiatanModel;

class Kegiatan extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    protected $kegiatan;
    
    public function __construct() {
       $this->kegiatan = new KegiatanModel();
    }

    public function index()
    {   
		$data['kegiatan'] = $this->kegiatan->findAll();
		return view('backend/kegiatan/index', $data);
        
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return view('backend/kegiatan/create');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $userModel = $this->kegiatan;
        $data = [
            'judul' => $this->request->getVar('judul'),
            'kapasitas' => $this->request->getVar('kapasitas'),
            'harga_tiket' => $this->request->getVar('harga_tiket'),
            'tanggal' => $this->request->getVar('tanggal'),
            'narasumber' => $this->request->getVar('narasumber'),
            'tempat' => $this->request->getVar('tempat'),
            'pic' => $this->request->getVar('pic'),
            'foto_flyer' => $this->request->getVar('foto_flyer'),
            'jenis_id' => $this->request->getVar('jenis_id'),
        ];
        $userModel->insert($data);
        return redirect()->route('kegiatan');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $data['kegiatan'] = $this->kegiatan->where('id', $id)->first();
        return view('backend/kegiatan/edit', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        
        $id = $this->request->getVar('id');
        $data = [
            'judul' => $this->request->getVar('judul'),
            'kapasitas' => $this->request->getVar('kapasitas'),
            'harga_tiket' => $this->request->getVar('harga_tiket'),
            'tanggal' => $this->request->getVar('tanggal'),
            'narasumber' => $this->request->getVar('narasumber'),
            'tempat' => $this->request->getVar('tempat'),
            'pic' => $this->request->getVar('pic'),
            'foto_flyer' => $this->request->getVar('foto_flyer'),
            'jenis_id' => $this->request->getVar('jenis_id'),
           
        ];
        $this->kegiatan->update($id, $data);
        return redirect()->route('kegiatan');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $data['kegiatan'] = $this->kegiatan->where('id', $id)->delete($id);
        return redirect()->to('/kegiatan');
    }
}
