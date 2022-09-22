<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNotifications extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'notif_id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'notif_head' => ['type' => 'varchar', 'constraint' => 50],
            'notif_body' => ['type' => 'text'],
            'created_at' => ['type' => 'datetime', 'null' => true]
        ]);
        $this->forge->addKey('notif_id', true);
        $this->forge->createTable('notifications', true);
    }

    public function down()
    {
        $this->forge->dropTable('notifications', true);
    }
}