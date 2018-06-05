<?php

use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;
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
            'id' => Uuid::uuid(),
            'name' => 'Gema Akbar',
            'email' => 'dityaksm21@gmail.com',
            'password' => '$2y$10$FtU/xBJjkXRbd2B21Xy7JOVN0io5XWrLAVfpBBTNRj2yNJJVEeXFa', //password is password
            'remember_token' => null,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

    }
}
