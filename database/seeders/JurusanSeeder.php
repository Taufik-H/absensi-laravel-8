<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusan = [
            ['jurusan'=>'RPL'],
            ['jurusan'=>'TKJ'],
            ['jurusan'=>'MM'],
            ['jurusan'=>'AKL'],
        ];

       foreach($jurusan as $j){
           Jurusan::create($j);
       }
       

        
    }
}
