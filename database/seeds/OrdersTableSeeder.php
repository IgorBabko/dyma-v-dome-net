<?php

use Illuminate\Database\Seeder;
use DymaVDomeNet\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::truncate();
        factory(Order::class, 50)->create();
    }
}
