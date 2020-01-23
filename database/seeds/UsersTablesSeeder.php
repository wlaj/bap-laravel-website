<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'username' => 'JohnSmith',
          'email' => 'john_smith@gmail.com',
          'password' => Hash::make('password'),
        ]);
    }
}
