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
    }

    public function down()
    {
        $this->forge->dropTable('data_api_key');
    }
}
