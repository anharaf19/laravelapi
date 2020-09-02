<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'user petani',
            'hakakses' => 'petani',
            'email' => 'petani@example.com',
            'password' => bcrypt('password')
        ]);
        User::create([
            'nama' => 'user distributor',
            'hakakses' => 'distributor',
            'email' => 'distributor@example.com',
            'password' => bcrypt('password')
        ]);
        User::create([
            'nama' => 'user pengolah',
            'hakakses' => 'pengolah',
            'email' => 'pengolah@example.com',
            'password' => bcrypt('password')
        ]);
        User::create([
            'nama' => 'user konsumen',
            'hakakses' => 'konsumen',
            'email' => 'konsumen@example.com',
            'password' => bcrypt('password')
        ]);
    }
}
