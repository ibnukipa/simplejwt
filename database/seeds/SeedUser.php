<?php

use Illuminate\Database\Seeder;
use App\User;

class SeedUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $user = User::create([
        	'name' 			=> 'Ibnu Prayogi',
        	'email'				=> 'ibnu@gmail.com',
        	'password'			=> bcrypt('ibnu@gmail.com'),
        ]);
    }
}
