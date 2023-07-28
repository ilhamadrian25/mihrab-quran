<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Banner extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_banner'   =>  [
                'type'          =>          'INT',
                'auto_increment'        =>      TRUE,
                'constraint'            =>      11
            ],
            'title'   =>  [
                'type'          =>          'VARCHAR',
                'constraint'            =>      225
            ],
            'content'   =>  [
                'type'          =>          'TEXT'
            ],
            'image'   =>  [
                'type'          =>          'VARCHAR',
                'constraint'            =>      255
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'default' => null,
            ],
        ]);
        $this->forge->addKey('id_banner', TRUE);
        $this->forge->createTable('banner');
    }

    public function down()
    {
        $this->forge->dropTable('banner');
    }
}
