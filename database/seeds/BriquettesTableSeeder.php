<?php

use Illuminate\Database\Seeder;
use DymaVDomeNet\Briquette;

class BriquettesTableSeeder extends Seeder
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
