<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTabelRekapAbsensi extends Migration
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
            'bulan' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'tahun' => [
                'type' => 'YEAR',
            ],
            'tanggal_1' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],

            'tanggal_2' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],

            'tanggal_3' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],

            'tanggal_4' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],

            'tanggal_5' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_6' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_7' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_8' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_9' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_10' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_1' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],

            'tanggal_2' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],

            'tanggal_3' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],

            'tanggal_4' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],

            'tanggal_5' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_6' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_7' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_8' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_9' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_10' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_11' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],

            'tanggal_12' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],

            'tanggal_13' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],

            'tanggal_14' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],

            'tanggal_15' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_16' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_17' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_18' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_19' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_20' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_21' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],

            'tanggal_22' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],

            'tanggal_23' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],

            'tanggal_24' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],

            'tanggal_25' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_26' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_27' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_28' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_29' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_30' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
            ],
            'tanggal_31' => [
                'type' => 'ENUM',
                'constraint' => ['S', 'I', 'A', 'H', 'T'],
                'default' => 'A',
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
        $this->forge->createTable('rekap_absensi');
    }

    public function down()
    {
        $this->forge->dropTable('rekap_absensi');
    }
}
