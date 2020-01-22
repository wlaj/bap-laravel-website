<?php

use Illuminate\Database\Seeder;
use App\User;

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
      User::create([
        'username' => 'John Smith',
        'password' => Hash::make('password'),
        'remember_token' => str_random(10),
      ]);
    }
}
