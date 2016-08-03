<?php

use DymaVDomeNet\Photo;
use Illuminate\Database\Seeder;

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

        factory(Photo::class, 10)->create([
            'product_name' => 'chimneys',
        ]);

        factory(Photo::class, 10)->create([
            'product_name' => 'briquettes',
        ]);

        factory(Photo::class, 10)->create([
            'product_name' => 'boilers',
        ]);
    }
}
