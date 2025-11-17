<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class KepalaLab extends BaseController
{
    public function index()
    {
        // Check if user is logged in and has kepala_lab role
        if (!session()->get('logged_in') || session()->get('role') !== 'kepala_lab') {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login sebagai kepala lab');
        }
        
        $data = [
            'title' => 'Dashboard Kepala Lab - EPIC System',
        ];
        
        return view('dashboard/kepala_lab', $data);
    }
}
