<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->nama = 'Gilang Hadi';
        $user->nis = '206883';        
        $user->kelas = ' ';
        $user->role = 'admin';
        $user->password = bcrypt('12345');
        $user->save();
    }
}