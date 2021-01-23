<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name'    => 'Admin',
            'username' => 'sukhwinder',
            'email'   => 'sukheducator@gmail.com',
            'password' => bcrypt('sukheducator@89688'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name'    => 'Author',
            'username' => 'sukhwinder singh',
            'email'   => 'Author@gmail.com',
            'password' => bcrypt('rootauthor'),
        ]);
    }
}
