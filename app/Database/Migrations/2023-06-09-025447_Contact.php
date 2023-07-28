<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contact extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_contact'   =>  [
                'type'          =>          'INT',
                'auto_increment'        =>      TRUE,
                'constraint'            =>      11
            ],
            'alamat'   =>  [
                'type'          =>          'TEXT',
            ],
            'no_telp'   =>  [
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
        $this->forge->addKey('id_contact', TRUE);
        $this->forge->createTable('contact');
    }

    public function down()
    {
        $this->forge->dropTable('contact');
    }
}
