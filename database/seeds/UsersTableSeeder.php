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

         DB::table('users')->insert([
            'name' => 'Pedro',
            'email' => 'pedro@hallmg.com',
            'password' => Hash::make('123123')
        ]);

        DB::table('users')->insert([
            'name' => 'Ramos',
            'email' => 'ramos@hallmg.com',
            'password' => Hash::make('123123')
        ]);
    }
}
