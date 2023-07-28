<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Article extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_article' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
                'constraint' => 10
            ],
            'id_admin' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'null' => false,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'content' => [
                'type' => 'TEXT'
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 110,
                'null' => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_article', true);
        $this->forge->createTable('article');
    }

    public function down()
    {
        $this->forge->dropTable('article');
    }
}
