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
        DB::table('mines')->truncate(); 
        DB::table('mines')->insert([
            'name' => 'フィルムカメラ',
            'age' => '19',
        ]);
    }
}
