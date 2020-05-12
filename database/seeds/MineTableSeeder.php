<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Artisan実行時、情報を格納
       DB::table('mine')->truncate(); //2回目はシーダー情報をクリア
       DB::table('mine')->insert([
           'name' => 'takuya',
           'age'  => '26',
        ]);
    }
}