<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SocialMedia extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_social_media'   => [
                'type'      =>      'INT',
                
            ]
        ]);
    }

    public function down()
    {
        //
    }
}
