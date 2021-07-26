<?php

namespace Database\Seeders;

use App\Models\district;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $district = array(
            // Zone 1
            array('name' => '04D01', 'code' => '04D01', 'zone' => 1),
            array('name' => '04D02', 'code' => '04D02' , 'zone' => 1),
            array('name' => '04D03', 'code' => '04D03' , 'zone' => 1),
            array('name' => 'UNIDADES CANTON RIOVERDE', 'code' => '00' , 'zone' => 1),
            array('name' => 'UNIDADES CANTON ESMERALDAS', 'code' => '00' , 'zone' => 1),
            array('name' => '08D02', 'code' => '08D02' , 'zone' => 1),
            array('name' => '08D03', 'code' => '08D03' , 'zone' => 1),
            array('name' => '08D04', 'code' => '08D04' , 'zone' => 1),
            array('name' => '08D05', 'code' => '08D05' , 'zone' => 1),
            array('name' => '10D01', 'code' => '10D01' , 'zone' => 1),
            array('name' => '10D02', 'code' => '10D02' , 'zone' => 1),
            array('name' => '10D03', 'code' => '10D03' , 'zone' => 1),
            array('name' => '21D02', 'code' => '21D02' , 'zone' => 1),
            array('name' => '21D04', 'code' => '21D04' , 'zone' => 1),
            // Zone 2
            array('name' => '15D01', 'code' => '15D01' , 'zone' => 2),
            array('name' => '15D02', 'code' => '15D02' , 'zone' => 2),
            array('name' => '17D10', 'code' => '17D10' , 'zone' => 2),
            array('name' => '17D11', 'code' => '17D11' , 'zone' => 2),
            array('name' => '17D12', 'code' => '17D12' , 'zone' => 2),
            array('name' => '22D01', 'code' => '22D01' , 'zone' => 2),
            array('name' => '22D02', 'code' => '22D02' , 'zone' => 2),
            array('name' => '22D03', 'code' => '22D03' , 'zone' => 2),
            // Zone 3
            array('name' => '05D01', 'code' => '05D01' , 'zone' => 3),
            array('name' => '05D03', 'code' => '05D03' , 'zone' => 3),
            array('name' => '05D04', 'code' => '05D04' , 'zone' => 3),
            array('name' => '05D06', 'code' => '05D06' , 'zone' => 3),
            array('name' => '06D01', 'code' => '06D01' , 'zone' => 3),
            array('name' => '06D02', 'code' => '06D02' , 'zone' => 3),
            array('name' => '06D04', 'code' => '06D04' , 'zone' => 3),
            array('name' => '16D01', 'code' => '16D01' , 'zone' => 3),
            array('name' => '16D02', 'code' => '16D02' , 'zone' => 3),
            array('name' => '18D02', 'code' => '18D02' , 'zone' => 3),
            array('name' => '18D04', 'code' => '18D04' , 'zone' => 3),
            // Zona 4
            array('name' => 'CANTON PORTOVIEJO', 'code' => '00' , 'zone' => 4),
            array('name' => '13D02', 'code' => '13D02' , 'zone' => 4),
            array('name' => '13D03', 'code' => '13D03' , 'zone' => 4),
            array('name' => '13D04', 'code' => '13D04' , 'zone' => 4),
            array('name' => '13D05', 'code' => '13D05' , 'zone' => 4),
            array('name' => '13D06', 'code' => '13D06' , 'zone' => 4),
            array('name' => '13D07', 'code' => '13D07' , 'zone' => 4),
            array('name' => 'OFICINA TECNICA PICHINCHA', 'code' => '00' , 'zone' => 4),
            array('name' => '13D09', 'code' => '13D09' , 'zone' => 4),
            array('name' => 'OFICINA TECNICA PEDERNALES', 'code' => '00' , 'zone' => 4),
            array('name' => '13D11', 'code' => '13D11' , 'zone' => 4),
            array('name' => '13D12', 'code' => '13D12' , 'zone' => 4),
            array('name' => '23D01', 'code' => '23D01' , 'zone' => 4),
            array('name' => 'OFICINA TECNICA LOS ROSALES', 'code' => '00' , 'zone' => 4),
            array('name' => 'OFICINA TECNIOCA LA CONCORDIA', 'code' => '00' , 'zone' => 4),
             // Zona 5
            array('name' => '02D01', 'code' => '02D01' , 'zone' => 5),
            array('name' => '02D02', 'code' => '02D02' , 'zone' => 5),
            array('name' => '02D03', 'code' => '02D03' , 'zone' => 5),
            array('name' => '02D04', 'code' => '02D04' , 'zone' => 5),
            array('name' => '20D01', 'code' => '20D01' , 'zone' => 5),
            array('name' => '09D11', 'code' => '09D11' , 'zone' => 5),
            array('name' => '09D12', 'code' => '09D12' , 'zone' => 5),
            array('name' => '09D13', 'code' => '09D13' , 'zone' => 5),
            array('name' => '09D14', 'code' => '09D14' , 'zone' => 5),
            array('name' => '09D15', 'code' => '09D15' , 'zone' => 5),
            array('name' => '09D16', 'code' => '09D16' , 'zone' => 5),
            array('name' => '09D17', 'code' => '09D17' , 'zone' => 5),
            array('name' => '09D18', 'code' => '09D18' , 'zone' => 5),
            array('name' => '09D19', 'code' => '09D19' , 'zone' => 5),
            array('name' => '09D20', 'code' => '09D20' , 'zone' => 5),
            array('name' => '09D21', 'code' => '09D21' , 'zone' => 5),
            array('name' => '09D22', 'code' => '09D22' , 'zone' => 5),
            array('name' => '12D01', 'code' => '12D01' , 'zone' => 5),
            array('name' => '12D02', 'code' => '12D02' , 'zone' => 5),
            array('name' => '12D03', 'code' => '12D03' , 'zone' => 5),
            array('name' => '12D04', 'code' => '12D04' , 'zone' => 5),
            array('name' => '12D05', 'code' => '12D05' , 'zone' => 5),
            array('name' => '12D06', 'code' => '12D06' , 'zone' => 5),
            array('name' => '24D01', 'code' => '24D01' , 'zone' => 5),
            array('name' => '24D02', 'code' => '24D02' , 'zone' => 5),
            // Zona 6
            array('name' => '01D01', 'code' => '01D01' , 'zone' => 6),
            array('name' => '01D02', 'code' => '01D02' , 'zone' => 6),
            array('name' => '01D04', 'code' => '01D04' , 'zone' => 6),
            array('name' => '01D05', 'code' => '01D05' , 'zone' => 6),
            array('name' => '01D06', 'code' => '01D06' , 'zone' => 6),
            array('name' => '01D07', 'code' => '01D07' , 'zone' => 6),
            array('name' => '03D01', 'code' => '03D01' , 'zone' => 6),
            array('name' => '03D02', 'code' => '03D02' , 'zone' => 6),
            array('name' => '03D03', 'code' => '03D03' , 'zone' => 6),
            array('name' => '14D01', 'code' => '14D01' , 'zone' => 6),
            array('name' => '14D02', 'code' => '14D02' , 'zone' => 6),
            array('name' => '14D03', 'code' => '14D03' , 'zone' => 6),
            array('name' => '14D04', 'code' => '14D04' , 'zone' => 6),
            array('name' => '14D05', 'code' => '14D05' , 'zone' => 6),
            array('name' => '14DO06', 'code' => '14DO06' , 'zone' => 6),
            // zona 7
            array('name' => '07D01', 'code' => '07D01' , 'zone' => 7),
            array('name' => '07D02', 'code' => '07D02' , 'zone' => 7),
            array('name' => '07D03', 'code' => '07D03' , 'zone' => 7),
            array('name' => '07D04', 'code' => '07D04' , 'zone' => 7),
            array('name' => '07D05', 'code' => '07D05' , 'zone' => 7),
            array('name' => '07D06', 'code' => '07D06' , 'zone' => 7),
            array('name' => 'CANTON LOJA', 'code' => '00' , 'zone' => 7),
            array('name' => '11D02', 'code' => '11D02' , 'zone' => 7),
            array('name' => '11D03', 'code' => '11D03' , 'zone' => 7),
            array('name' => '11D04', 'code' => '11D04' , 'zone' => 7),
            array('name' => '11D05', 'code' => '11D05' , 'zone' => 7),
            array('name' => '11D06', 'code' => '11D06' , 'zone' => 7),
            array('name' => '11D07', 'code' => '11D07' , 'zone' => 7),
            array('name' => '11DO8', 'code' => '11DO8' , 'zone' => 7),
            array('name' => '11D09', 'code' => '11D09' , 'zone' => 7),
            array('name' => '19D01', 'code' => '19D01' , 'zone' => 7),
            array('name' => '19D03', 'code' => '19D03' , 'zone' => 7),
            array('name' => '19D04', 'code' => '19D04' , 'zone' => 7),
            // zona 8
            array('name' => '09D01', 'code' => '09D01' , 'zone' => 8),
            array('name' => '09D02', 'code' => '09D02' , 'zone' => 8),
            array('name' => '09D03', 'code' => '09D03' , 'zone' => 8),
            array('name' => '09D04', 'code' => '09D04' , 'zone' => 8),
            array('name' => '09D05', 'code' => '09D05' , 'zone' => 8),
            array('name' => '09D06', 'code' => '09D06' , 'zone' => 8),
            array('name' => '09D07', 'code' => '09D07' , 'zone' => 8),
            array('name' => '09D08', 'code' => '09D08' , 'zone' => 8),
            array('name' => '09D09', 'code' => '09D09' , 'zone' => 8),
            array('name' => '09D10', 'code' => '09D10' , 'zone' => 8),
            array('name' => '09D23', 'code' => '09D23' , 'zone' => 8),
            array('name' => '09D24', 'code' => '09D24' , 'zone' => 8),
            // Zona 9
            array('name' => 'ZONA 9', 'code' => 'ZONA 9' , 'zone' => 9),

         );

         foreach($district as $value){
             district::create([
                 'name' => $value['name'],
                 'code' => $value['code'],
                 'zones_id' => $value['zone'],
             ]);
         }


    }
}
