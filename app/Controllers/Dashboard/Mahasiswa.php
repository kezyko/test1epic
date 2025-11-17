<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Mahasiswa extends BaseController
{
    public function index()
    {
        // Check if user is logged in and has mahasiswa role
        if (!session()->get('logged_in') || session()->get('role') !== 'mahasiswa') {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login sebagai mahasiswa');
        }
        
        $data = [
            'title' => 'Dashboard Mahasiswa - EPIC System',
        ];
        
        return view('dashboard/mahasiswa', $data);
    }
}
