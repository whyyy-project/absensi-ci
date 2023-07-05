<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTabelAbsensi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_siswa' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'tanggal' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'masuk' => [
                'type' => 'TIME',
                'null' => true,
            ],
            'pulang' => [
                'type' => 'TIME',
                'null' => true,
            ],
            'status_absen' => [
                'type' => 'ENUM',
                'constraint' => ['Hadir', 'Terlambat'],
                'default' => 'Hadir',
            ],
            'keterangan' => [
                'type' => 'TEXT',
                'null' => true,
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
        $this->forge->addForeignKey('id_siswa', 'data_siswa', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('data_absensi');
    }

    public function down()
    {
        $this->forge->dropTable('data_absensi');
    }
}
