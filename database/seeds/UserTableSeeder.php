<?php

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
        /*DB::table('users')->insert([
            'name' => 'Jorge',
            'email'=> 'jorge@gmail.com',
            'password'=> 'jorge',
            'role'=> 'admin',
            ]);*/
        //Otro modo de incertar
        /*App\User::create([
            'name' => 'Jorge',
            'email'=> 'jorge@gmail.com',
            'password'=> 'jorge',
            'role'=> 'admin',
            ]);*/
        DB::table('users')->truncate();

        factory(App\User::class)->create([
            'name' => 'Jorge',
            'email'=> 'jorge@gmail.com',
            'role' => 'admin',
            'password'=> bcrypt('admin')

            ]);
        factory(App\User::class, 49)->create();
    }
}
