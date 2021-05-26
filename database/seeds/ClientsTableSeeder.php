<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Client::class, 8)->create();

        DB::table('client')->insert([
            [
                'cod' => '35626532',
                'name' => 'Lusiana Ferreira',
                'cities_id' => '1'
            ],
            [
                'cod' => '93562125',
                'name' => 'José Perez',
                'cities_id' => '2'
            ]

        ]);
    }
}
