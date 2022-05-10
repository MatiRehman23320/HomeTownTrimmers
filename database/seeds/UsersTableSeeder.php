<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
        DB::table('users')->insert([
            'name' => 'the admin user',
            'email' => 'iamadmin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'the barber user',
            'email' => 'iamabarber@gmail.com',
            'role' => 'barber',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'the customer user',
            'email' => 'iamacustomer@gmail.com',
            'role' => 'customer',
            'password' => Hash::make('password'),
        ]);
    }
}
