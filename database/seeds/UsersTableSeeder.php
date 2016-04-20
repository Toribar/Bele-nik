<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        factory(User::class)->create([
            'name' => 'Bata',
            'email' => 'bata@gmail.com',
            'password' =>bcrypt('secret'),
        ]);

        factory(User::class, 10)->create();
    }
}
