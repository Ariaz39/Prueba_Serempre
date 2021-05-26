<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\City::class, 3)->create();

        DB::table('cities')->insert([
            [
                'cod' => '654',
                'name' => 'Ibagué'
            ],
            [
                'cod' => '123',
                'name' => 'Bogotá'
            ],
        ]);
    }
}
