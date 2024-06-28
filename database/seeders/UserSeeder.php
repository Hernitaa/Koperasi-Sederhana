<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\App;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Dewan_Pengawas',
                'email' => 'pengawas@gmail.com',
                'level' => 'Dewan_Pengawas',
                'password' => bcrypt('123456'),
                'alamat' =>'Surabaya',
                'no_telp' =>'123456789'
            ],
            [
                'name' => 'Pengurus',
                'email' => 'pengurus@gmail.com',
                'level' => 'Pengurus',
                'password' => bcrypt('123456'),
                'alamat' =>'Surabaya',
                'no_telp' =>'987654321'
            ]
        ];

        foreach($userData as $key=> $val){
            User::create($val);
        }
    }
}
