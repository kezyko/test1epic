<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        // Check if user is logged in and has admin role
        if (!session()->get('logged_in') || session()->get('role') !== 'admin') {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login sebagai admin');
        }
        
        $data = [
            'title' => 'Dashboard Admin - EPIC System',
        ];
        
        return view('dashboard/admin', $data);
    }
}
