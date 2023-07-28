<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MqaTv extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_mqa_tv'    =>      [
                'type'  =>   'INT',
                'constraint'    =>      110,
                'auto_increment'    =>      TRUE,
            ],
            'url_video'     =>      [
                'type'  =>  'VARCHAR',
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
        $this->forge->addkey('id_mqa_tv', TRUE);
        $this->forge->createTable('mqa_tv');
    }

    public function down()
    {
        //
    }
}
