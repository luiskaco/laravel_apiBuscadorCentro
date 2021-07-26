<?php

namespace Database\Seeders;

use App\Models\Zones;
use Illuminate\Database\Seeder;

class ZonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $arrayItems = ['zona 1', 'zona 2', 'zona 3', 'zona 4', 'zona 5', 'zona 6', 'zona 7' , 'zona 8', 'zona 9'];

        foreach($arrayItems as $key => $value){
            Zones::create([
                'name' => $value
            ]);
        }
    }

}
