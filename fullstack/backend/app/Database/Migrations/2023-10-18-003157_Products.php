<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class Products extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type' =>'INT',
                'constraint' => 5,
                'auto_increment' => true
            ],
            'title' =>[
                'type' =>'VARCHAR',
                'constraint' => 200
            ],
            'price' =>[
                'type' =>'INT',
                'constraint' => 11
            ]    
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('products');

    }

    public function down()
    {
        //
    }
}
