<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Stock/Mineの格納を実行
        $this->call(StockTableSeeder::class);
        $this->call(MineTableSeeder::class);
    }
}
