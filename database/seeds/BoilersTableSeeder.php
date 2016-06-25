<?php

use Illuminate\Database\Seeder;
use DymaVDomeNet\Boiler;

class BoilersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Boiler::truncate();
        factory(Boiler::class, 50)->create();
    }
}
