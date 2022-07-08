<?php

namespace App\Controllers;

use App\Models\PendaftaranModel;
use CodeIgniter\RESTful\ResourceController;

class Pendaftaran extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    protected $pendaftaran;
    
    public function __construct() {
       $this->pendaftaran = new PendaftaranModel();
    }

    public function index()
    {   
		$data['pendaftaran'] = $this->pendaftaran->findAll();
		return view('backend/pendaftaran/index', $data);
        
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
        return view('backend/pendaftaran/create');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $userModel = $this->pendaftaran;
        $data = [
            'tanggal_daftar' => $this->request->getVar('tanggal_daftar'),
            'alasan' => $this->request->getVar('alasan'),
            'users_id' => $this->request->getVar('users_id'),
            'kegiatan_id' => $this->request->getVar('kegiatan_id'),
            'kategori_peserta_id' => $this->request->getVar('kategori_peserta_id'),
            'nosertifikat' => $this->request->getVar('nosertifikat'),
        ];
        $userModel->insert($data);
        return redirect()->route('pendaftaran');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
       
        $data['pendaftaran'] = $this->pendaftaran->where('id', $id)->first();
        return view('backend/pendaftaran/edit', $data);
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
            'tanggal_daftar' => $this->request->getVar('tanggal_daftar'),
            'alasan' => $this->request->getVar('alasan'),
            'users_id' => $this->request->getVar('users_id'),
            'kegiatan_id' => $this->request->getVar('kegiatan_id'),
            'kategori_peserta_id' => $this->request->getVar('kategori_peserta_id'),
            'nosertifikat' => $this->request->getVar('nosertifikat'),
        ];
        $this->pendaftaran->update($id, $data);
        return redirect()->route('pendaftaran');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $data['pendaftaran'] = $this->pendaftaran->where('id', $id)->delete($id);
        return redirect()->to('/pendaftaran');
    }
}
