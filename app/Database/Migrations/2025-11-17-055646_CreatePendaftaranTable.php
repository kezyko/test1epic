<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePendaftaranTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'mahasiswa_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'jenis_tes' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'tanggal_tes' => [
                'type' => 'DATE',
            ],
            'waktu_tes' => [
                'type' => 'TIME',
            ],
            'tempat_tes' => [
                'type'       => 'VARCHAR',
                'constraint' => 200,
            ],
            'status_pendaftaran' => [
                'type'       => 'ENUM',
                'constraint' => ['pending', 'verified', 'rejected', 'completed'],
                'default'    => 'pending',
            ],
            'hasil_tes' => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
                'null'       => true,
            ],
            'sertifikat_path' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('mahasiswa_id', 'mahasiswa', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pendaftaran');
    }

    public function down()
    {
        $this->forge->dropTable('pendaftaran');
    }
}
