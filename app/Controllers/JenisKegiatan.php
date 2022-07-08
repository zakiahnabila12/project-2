<?php

namespace App\Controllers;

use App\Models\JenisKegiatanModel;
use CodeIgniter\RESTful\ResourceController;


class JenisKegiatan extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    protected $jeniskeg;
    
    public function __construct() {
       $this->jeniskeg = new JenisKegiatanModel();
    }

    public function index()
    {   
		$data['jen_kegiatan'] = $this->jeniskeg->findAll();   
		return view('backend/refjenkeg/index', $data);

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
        return view('backend/refjenkeg/create');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $userModel = $this->jeniskeg;
        $data = [
            'nama' => $this->request->getVar('nama'),
        ];
        $userModel->insert($data);
        return redirect()->route('lovyou');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
       
        $data['jeniskeg'] = $this->jeniskeg->where('id', $id)->first();
        return view('backend/refjenkeg/edit', $data);
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
            'nama' => $this->request->getVar('nama'),
           
        ];
        $this->jeniskeg->update($id, $data);
        return redirect()->route('lovyou');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $data['jen_kegiatan'] = $this->jeniskeg->where('id', $id)->delete($id);
        return redirect()->to('/lovyou');
    }
}