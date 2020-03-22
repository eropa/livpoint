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
        DB::table('users')->insert([
            'name' => 'admindb',
            'email' => 'admindb@gmail.com',
            'role' => 'admindb',
            'password' => Hash::make('password'),
        ]);
    }
}
