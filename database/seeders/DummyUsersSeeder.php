<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $userData = [

        [
            'nama'=>'Iqbale',
            'password'=>bcrypt('123'),
            'role'=>'pembeli'
        ],
        [
            'nama'=>'admun',
            'password'=>bcrypt('123'),
            'role'=>'admin'
        ],

       ];

       foreach($userData as $key => $val ){
        User::create($val);

       }
    }
}
