<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        $user = [
            [
                'nama' => 'Gilang Hadi',
                'nis' => '123412',
                'kelas' => ' ',
                'role' => 'admin',
                'password' => Hash::make('12345678'),
                'voting' => 2
            ]
        ];
        foreach ($user as $user) {
            User::create($user);
        }
    }
}
