<?php

namespace App\Controllers;

use App\Models\KategoriPesertaModel;
use CodeIgniter\RESTful\ResourceController;

class KategoriPeserta extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    protected $kategoripes;
    
    public function __construct() {
       $this->kategoripes = new KategoriPesertaModel();
    }

    public function index()
    {   
		$data['kategoripes'] =  $this->kategoripes->findAll();   
		return view('backend/refkatpes/index', $data);

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
        return view('backend/refkatpes/create');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $userModel = $this->kategoripes;
        $data = [
            'nama' => $this->request->getVar('nama'),
        ];
        $userModel->insert($data);
        return redirect()->route('katpes');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $data['kategoripes'] = $this->kategoripes->where('id', $id)->first();
        return view('backend/refkatpes/edit', $data);
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
        $this->kategoripes->update($id, $data);
        return redirect()->route('katpes');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $data['kategoripes'] = $this->kategoripes->where('id', $id)->delete($id);
        return redirect()->to('/katpes');
    }
}