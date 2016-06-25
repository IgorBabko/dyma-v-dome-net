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
        Briquette::truncate();
        factory(Briquette::class, 50)->create();
    }
}
