<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Olakunle Awotunbo',
            'email' => 'info@tunbor.com',
            'password' => bcrypt('1@Yemisi')
        ]);
    }
}
