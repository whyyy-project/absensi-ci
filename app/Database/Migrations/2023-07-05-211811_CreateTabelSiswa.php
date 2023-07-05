<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTabelSiswa extends Migration
{
    public function up()
    {
        // buat tabel data kelas
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'kelas' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false,
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
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('data_kelas');

        // buat data siswa
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'uuid' => [
                'type' => 'VARCHAR',
                'constraint' => 36,
                'null' => false,
            ],
            'id_kelas' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'nisn' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => false,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'angkatan' => [
                'type' => 'YEAR',
                'null' => false,
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['Aktif', 'Non-Aktif'],
                'default' => 'Aktif',
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
        $this->forge->addUniqueKey('uuid');
        $this->forge->addForeignKey('id_kelas', 'data_kelas', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('data_siswa');
    }

    public function down()
    {
        $this->forge->dropTable('data_kelas');
        $this->forge->dropTable('data_siswa');
    }
}
