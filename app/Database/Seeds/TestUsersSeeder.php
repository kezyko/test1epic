<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TestUsersSeeder extends Seeder
{
    public function run()
    {
        // Create test users
        $users = [
            [
                'username' => 'admin',
                'email' => 'admin@epic.test',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'role' => 'admin',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username' => 'kepala_lab',
                'email' => 'kepalalab@epic.test',
                'password' => password_hash('kepalalab123', PASSWORD_DEFAULT),
                'role' => 'kepala_lab',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username' => 'mahasiswa1',
                'email' => 'mahasiswa1@epic.test',
                'password' => password_hash('mahasiswa123', PASSWORD_DEFAULT),
                'role' => 'mahasiswa',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        
        $this->db->table('users')->insertBatch($users);
        
        // Get mahasiswa user
        $mahasiswaUser = $this->db->table('users')->where('username', 'mahasiswa1')->get()->getRowArray();
        
        // Create mahasiswa profile
        if ($mahasiswaUser) {
            $mahasiswa = [
                'user_id' => $mahasiswaUser['id'],
                'nim' => '12345678',
                'nama_lengkap' => 'Mahasiswa Test',
                'jurusan' => 'Teknik Informatika',
                'semester' => 5,
                'no_telp' => '081234567890',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            
            $this->db->table('mahasiswa')->insert($mahasiswa);
        }
    }
}
