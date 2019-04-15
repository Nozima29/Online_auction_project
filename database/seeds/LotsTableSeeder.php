<?php

use Illuminate\Database\Seeder;

class LotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Lot::class, 30)->create();
    }
}
