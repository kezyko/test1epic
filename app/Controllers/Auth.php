<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\MahasiswaModel;

class Auth extends BaseController
{
    protected $userModel;
    protected $mahasiswaModel;
    
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->mahasiswaModel = new MahasiswaModel();
    }
    
    public function login()
    {
        if (session()->get('logged_in')) {
            return redirect()->to($this->getRedirectByRole(session()->get('role')));
        }
        
        return view('auth/login');
    }
    
    public function attemptLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        $user = $this->userModel->where('username', $username)->first();
        
        if (!$user) {
            return redirect()->back()->with('error', 'Username atau password salah');
        }
        
        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Username atau password salah');
        }
        
        if ($user['status'] !== 'active') {
            return redirect()->back()->with('error', 'Akun Anda tidak aktif');
        }
        
        session()->set([
            'user_id' => $user['id'],
            'username' => $user['username'],
            'email' => $user['email'],
            'role' => $user['role'],
            'logged_in' => true,
        ]);
        
        return redirect()->to($this->getRedirectByRole($user['role']));
    }
    
    public function register()
    {
        if (session()->get('logged_in')) {
            return redirect()->to($this->getRedirectByRole(session()->get('role')));
        }
        
        return view('auth/register');
    }
    
    public function attemptRegister()
    {
        $validation = \Config\Services::validation();
        
        $rules = [
            'username' => 'required|min_length[3]|max_length[100]|is_unique[users.username]',
            'email' => 'required|valid_email|max_length[100]|is_unique[users.email]',
            'password' => 'required|min_length[6]',
            'password_confirm' => 'required|matches[password]',
            'nim' => 'required|max_length[20]|is_unique[mahasiswa.nim]',
            'nama_lengkap' => 'required|max_length[200]',
            'jurusan' => 'required|max_length[100]',
            'semester' => 'required|integer',
            'no_telp' => 'required|max_length[20]',
        ];
        
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        
        $db = \Config\Database::connect();
        $db->transStart();
        
        try {
            // Create user account
            $userId = $this->userModel->insert([
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'role' => 'mahasiswa',
                'status' => 'active',
            ]);
            
            // Create mahasiswa profile
            $this->mahasiswaModel->insert([
                'user_id' => $userId,
                'nim' => $this->request->getPost('nim'),
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'jurusan' => $this->request->getPost('jurusan'),
                'semester' => $this->request->getPost('semester'),
                'no_telp' => $this->request->getPost('no_telp'),
            ]);
            
            $db->transComplete();
            
            if ($db->transStatus() === false) {
                return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat registrasi');
            }
            
            return redirect()->to('/auth/login')->with('success', 'Registrasi berhasil! Silakan login.');
            
        } catch (\Exception $e) {
            $db->transRollback();
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login')->with('success', 'Anda telah logout');
    }
    
    private function getRedirectByRole($role)
    {
        switch ($role) {
            case 'mahasiswa':
                return '/dashboard/mahasiswa';
            case 'admin':
                return '/dashboard/admin';
            case 'kepala_lab':
                return '/dashboard/kepala-lab';
            default:
                return '/';
        }
    }
}
