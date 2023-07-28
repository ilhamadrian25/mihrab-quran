<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Meta extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_meta'   =>  [
                'type'          =>          'INT',
                'auto_increment'        =>      TRUE,
                'constraint'            =>      11
            ],
            'name'   =>  [
                'type'          =>          'VARCHAR',
                'constraint'            =>      225
            ],
            'content'   =>  [
                'type'          =>          'TEXT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'default' => null,
            ],
        ]);
        $this->forge->addKey('id_meta', TRUE);
        $this->forge->createTable('meta');
    }

    public function down()
    {
        $this->forge->dropTable('meta');
    }
}
