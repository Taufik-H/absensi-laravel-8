<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            ['kelas'=>'10'],
            ['kelas'=>'11'],
            ['kelas'=>'12'],
        ];
        foreach($kelas as $k){
            Kelas::create($k);
        }
    }
}
