<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ApiKey extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'api' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false,
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('data_api_key');

        // Menambahkan data awal
        $data = [
            [
                'api' => '12345678',
                'type' => 'getAllDataSiswa',
            ],
            [
                'api' => '87654321',
                'type' => 'Absensi'
            ],
            [
                'api' => '12341234',
                'type' => 'InsertRFID'
            ]
        ];

        $this->db->table('data_api_key')->insert($data);
    }

    public function down()
    {
        $this->forge->$this->forge->dropTable('data_api_key');
    }
}
