<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaction extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaction'   =>  [
                'type'          =>          'INT',
                'auto_increment'        =>      TRUE,
                'constraint'            =>      11
            ],
            'id_program'               =>  [
                'type'          =>      'INT'
            ],
            'order_id'          =>  [
                'type'          =>  'VARCHAR',
                'constraint'    =>  225
            ],
            'status_transaction'   =>  [
                'type'          =>          'VARCHAR',
                'constraint'            =>      225
            ],
            'transaction_id'   =>  [
                'type'          =>          'INT',
                'constraint'            =>      11
            ],
            'donation_amount'   =>  [
                'type'          =>      'INT',
                'constraint'    =>      225
            ],
            'full_name'   =>  [
                'type'          =>          'VARCHAR',
                'constraint'            =>      225
            ],
            'phone_number'   =>  [
                'type'          =>          'VARCHAR',
                'constraint'            =>      255
            ],
            'support_message'   =>  [
                'type'          =>          'TEXT',
            ],
        ]);
        $this->forge->addKey('id_transaction', TRUE);
        $this->forge->createTable('transaction');
    }

    public function down()
    {
        // $this->forge->dropTable('settings');
    }
}
