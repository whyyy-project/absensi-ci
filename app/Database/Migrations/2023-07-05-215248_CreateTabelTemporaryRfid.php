<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTabelTemporaryRfid extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'rfid' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false,
            ],
            'jenis_scan' => [
                'type' => 'ENUM',
                'constraint' => ['absen', 'scan'],
                'null' => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('data_temporary_rfid');
    }

    public function down()
    {
        $this->forge->dropTable('data_temporary_rfid');
    }
}
