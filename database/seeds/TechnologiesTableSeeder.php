<?php

use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seed some technologies to play with
        factory(App\Technology::class, 10)->create();
    }
}
