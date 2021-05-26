<?php

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
            'name' => 'Alejandro Ariaz',
            'email' => 'ariaz39@hotmail.com',
            'password' => '$2y$10$YI/scSPKF8D/XTCoAtLxvuBsWVIdHbfk39bjLVs97G8CWvBfRaltm',
            'created_at' => '1991-04-16',
            'updated_at' => '2021-05-26'
        ]);
    }
}
