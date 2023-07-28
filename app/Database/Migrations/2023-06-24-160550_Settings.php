<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Settings extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_settings'   =>  [
                'type'          =>          'INT',
                'auto_increment'        =>      TRUE,
                'constraint'            =>      11
            ],
            'title'   =>  [
                'type'          =>          'TEXT',
            ],
            'favicon'   =>  [
                'type'          =>          'VARCHAR',
                'constraint'    =>          225
            ],
            'maps'   =>  [
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
        $this->forge->addKey('id_settings', TRUE);
        $this->forge->createTable('settings');
    }

    public function down()
    {
        //
    }
}
