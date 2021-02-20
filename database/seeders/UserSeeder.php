<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name="Admin";
        $user->email="admin@gmail.com";
        $user->password=bcrypt("admin1234");
        $user->jenis_kelamin="laki-laki";
        $user->save();
       
    }
}
