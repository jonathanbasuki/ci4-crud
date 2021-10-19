<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
    public function up()
    {
        $this->forge->addField([
        	'id' => [
        		'type' => 'INT',
        		'unsigned' => true,
        		'auto_increment' => true,
        	],
        	'name' => [
        		'type' => 'VARCHAR',
        		'constraint' => 255,
        	],
        	'price' => [
        		'type' => 'INT',
        	],
        	'stock' => [
        		'type' => 'INT',
        	],
        	'created_at' => [
        		'type' => 'DATETIME',
        	],
        	'updated_at' => [
        		'type' => 'DATETIME',
        	],
        	'deleted_at' => [
        		'type' => 'DATETIME',
        	],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
