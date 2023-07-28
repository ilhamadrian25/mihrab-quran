<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengurus extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pengurus'   =>  [
                'type'          =>      'INT',
                'auto'          =>      TRUE,
                'constraint'    =>      10
            ],
            'name'          =>  [
                'type'          =>      'VARCHAR',
                'constraint'    =>      225
            ],
            'profile_image' =>  [
                'type'          =>      'VARCHAR',
                'constraint'    =>      225
            ],
            'position'      =>  [
                'type'          =>      'VARCHAR',
                'constraint'    =>      225
            ],
            'address'       =>  [
                'type'          =>      'VARCHAR',
                'constraint'    =>      225
            ],
            'created_at'    =>  [
                'type'          => 'DATETIME',
                'default' => date('Y-m-d H:i:s'),
            ],
            'updated_at'    =>  [
                'type'          => 'DATETIME',
                'default'       => null,
            ],
        ]);
        $this->forge->addKey('id_pengurus', true);
        $this->forge->createTable('pengurus');
    }

    public function down()
    {
        //
    }
}
