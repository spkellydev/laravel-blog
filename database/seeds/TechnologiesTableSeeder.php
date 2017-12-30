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
        factory(App\Technologies::class, 10)->create();
    }
}
