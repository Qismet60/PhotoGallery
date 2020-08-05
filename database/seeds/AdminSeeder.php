<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
           'name'=>'Ali',
            'email' => 'alikarimli@gmail.com',
            'password' => bcrypt('muxalifet'),
        ]);
    }
}
