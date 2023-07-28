<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Program extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_program'    =>      [
                'type'  =>   'INT',
                'constraint'    =>      110,
                'auto_increment'    =>      TRUE,
            ],
            'title'     =>      [
                'type'  =>  'VARCHAR',
                'constraint'    =>  255,
            ],
            'image'     =>      [
                'type'  =>  'VARCHAR',
                'constraint'    =>  255,
            ],
            'description'     =>      [
                'type'  =>  'TEXT',
            ],
            'target_time_donation'     =>      [
                'type' => 'DATETIME',
            ],
            'target_donation'     =>      [
                'type'  =>  'INT',
                'constraint'    =>  255,
            ],
            'total_donation'     =>      [
                'type'  =>  'INT',
                'constraint'    =>  255,
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'default' => null,
            ],
        ]);
        $this->forge->addkey('id_program', TRUE);
        $this->forge->createTable('program');
    }

    public function down()
    {
        //
    }
}
