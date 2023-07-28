<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Santri extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_santri' =>  [
                'type'  =>  'INT',
                'auto_increment'    =>  TRUE,
            ],
            'name'  =>  [
                'type'  =>  'VARCHAR',
                'constraint'    =>  255,
            ],
            'dob'   =>  [
                'type'  =>  'DATETIME'
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'default' => null,
            ],
        ]);
        $this->forge->addKey('id_santri', TRUE);
        $this->forge->createTable('santri');
    }

    public function down()
    {
        //
    }
}
