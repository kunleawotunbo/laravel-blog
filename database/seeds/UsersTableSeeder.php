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
        $user = App\User::create([
            'name' => 'Olakunle Awotunbo',
            'email' => 'info@tunbor.com',
            'password' => bcrypt('1@Yemisi'),
            'admin' => 1,
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea minima totam impedit autem magnam porro animi quod iusto in cum. Nobis facilis necessitatibus obcaecati enim ex? Provident magni molestiae recusandae?',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
