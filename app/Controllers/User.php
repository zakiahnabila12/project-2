<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;

class User extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    protected $user;
    
    public function __construct() {
       $this->user = new UserModel();
       $this->session = \Config\Services::session();
    }

    public function index()
    {   
		$data['user'] = $this->user->findAll();
		return view('backend/user/index', $data);
        
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
        return view('backend/user/create');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $userModel = $this->user;
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'email' => $this->request->getVar('email'),
            'status' => $this->request->getVar('status'),
            'role' => $this->request->getVar('role'),
        
        ];
        $userModel->insert($data);
        return redirect()->route('user');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
       
        $data['user'] = $this->user->where('id', $id)->first();
        return view('backend/user/edit', $data);
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
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'email' => $this->request->getVar('email'),
            'status' => $this->request->getVar('status'),
            'role' => $this->request->getVar('role'),
        ];
        $this->user->update($id, $data);
        return redirect()->route('user');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $data['user'] = $this->user->where('id', $id)->delete($id);
        return redirect()->to('/user');
    }

    public function login()
    {
        return view('frontend/login');
    }
    
    public function register()
    {
        return view('frontend/registrasi');
    }
    
    public function valid_register()
    {

        $data = $this->request->getPost();
        
        $password = md5($data['password']);
        
        $this->user->save([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $password,
            'status' => 1,
            'role' => 'public'
            ]);
        
        session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to('/login');
    }
    
    public function valid_login()
    {
        $data = $this->request->getPost();
        
        $user = $this->user->where('username', $data['username'])->first();
        
        if($user){
    
            if($user['password'] != md5($data['password'])){
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('/login');
            }
            else{
                $sessLogin = [
                    'isLogin' => true,
                    'username' => $user['username'],
                    'role' => $user['role']
                    ];
                $this->session->set($sessLogin);
                return redirect()->to('/kegiatan');
            }
        }
        else{
            session()->setFlashdata('username', 'Username tidak ditemukan');
            return redirect()->to('/login');
        }
    }
    
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/login');
    }
}
