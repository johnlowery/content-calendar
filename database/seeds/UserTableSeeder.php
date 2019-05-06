<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'John',
            'last_name' => 'Lowery',
            'email' => 'sbcman74@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
