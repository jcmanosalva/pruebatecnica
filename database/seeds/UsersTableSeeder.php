<?php

use Illuminate\Database\Seeder;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\DB;

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
            'name' => 'juan',
            'email' => 'jcmanosalva0@gmail.com',
            'password' => (new BcryptHasher)->make('123456'),
        ]);
    }
}
