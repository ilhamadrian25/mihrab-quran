<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gallery extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_gallery'   =>  [
                'type'          =>          'INT',
                'auto_increment'        =>      TRUE,
                'constraint'            =>      11
            ],
            'url_image'   =>  [
                'type'          =>          'VARCHAR',
                'constraint'            =>      225
            ],
            'description'   =>  [
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
        $this->forge->addKey('id_gallery', TRUE);
        $this->forge->createTable('gallery');
    }

    public function down()
    {
        $this->forge->dropTable('gallery');
    }
}
