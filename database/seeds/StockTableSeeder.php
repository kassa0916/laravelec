<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Artisan実行時、情報を格納
       DB::table('stocks')->truncate(); //2回目はシーダー情報をクリア
       DB::table('stocks')->insert([
           'name' => 'workman',
           'detail' => 'ジャンク品です',
           'fee' => 3000,
           'imgpath' => 'workman.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'ギター',
           'detail' => 'gibson classic',
           'fee' => 100000,
           'imgpath' => 'guitar.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => '目覚まし時計',
           'detail' => 'エースが喋ります',
           'fee' => 2000,
           'imgpath' => 'clock.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'windowsPC',
           'detail' => '自作10年ものです',
           'fee' => 50000,
           'imgpath' => 'pc.jpg',
       ]);


       DB::table('stocks')->insert([
           'name' => '扇風機',
           'detail' => '世界に1つだけ！',
           'fee' => 9800,
           'imgpath' => 'fan.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'スノーボード',
           'detail' => '今ならセットで！',
           'fee' => 30000,
           'imgpath' => 'snowboard.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'Tシャツ',
           'detail' => 'SHIPSのシマシマシャツ',
           'fee' => 800,
           'imgpath' => 'ships.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'ビール',
           'detail' => '吹田が誇るビール',
           'fee' => 100,
           'imgpath' => 'beer.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'スピーカー',
           'detail' => 'コンポの付属物',
           'fee' => 2000,
           'imgpath' => 'speaker.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => '精米',
           'detail' => '米10Kgです',
           'fee' => 2000,
           'imgpath' => 'kome.jpg',
       ]);
    }
}
