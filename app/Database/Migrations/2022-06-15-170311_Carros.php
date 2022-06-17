<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Carros extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'int',
                'auto_increment'=>true
            ],
            'modelo'=>[
                'type'=>'varchar',
                'constraint'=>100
            ],
            'marca'=>[
                'type'=>'varchar',
                'constraint'=>100
            ],
            'placa'=>[
                'type'=>'varchar',
                'constraint'=>7
            ],
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('tb_carros');
    }

    public function down()
    {
        $this->forge->dropTable('tb_carros');
    }
}
