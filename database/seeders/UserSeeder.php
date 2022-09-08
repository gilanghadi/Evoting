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
        $user->nama = 'gilang';
        $user->nis = '11111';
        $user->kelas = 'rpl';
        $user->role = 'user';
        $user->password = bcrypt('12345');
        $user->save();
        
        $user = new User();
        $user->nama = 'gilang';
        $user->nis = '22222';
        $user->kelas = ' ';
        $user->role = 'admin';
        $user->password = bcrypt('12345');
        $user->save();
    }
}