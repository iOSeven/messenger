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
        DB::table('users')->insert([
        	'name' => 'Juan',
        	'email' => 'juan@hallmg.com',
        	'password' => Hash::make('123123')
        ]);
    }
}
