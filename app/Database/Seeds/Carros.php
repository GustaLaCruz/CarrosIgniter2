<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Carros extends Seeder
{
    public function run()
    {
        $modelo = ['Vesta', 'Granta', 'Largus', 'Xray', 'Niva Travel'];
        $placa = ['FWD3272','EKE2076','CTL7144','ERP2538','DRE0455'];
        for($x = 0; $x < 5; $x++){
            $data = [
                'modelo' => $modelo[$x],
                'Marca'    => 'Lada',
                'placa'=> $placa[$x]
                
            ];
            $this->db->table('tb_carros')->insert($data);
        }
        

        
    }
}