<?php

use Illuminate\Database\Seeder;
use DymaVDomeNet\Photo;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Photo::truncate();
        factory(Photo::class, 50)->create();
    }
}
