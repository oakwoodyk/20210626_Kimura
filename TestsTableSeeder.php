<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'email' => 'fgabdf@gmail.com',
        ];
        DB::table('tests')->insert($param);
        $param = [
            'name' => 'jiro',
            'email' => 'dfabdlf@gmail.com',
        ];
        DB::table('tests')->insert($param);
        $param = [
            'name' => 'saburo',
            'email' => 'jkfvakudlf@gmail.com',
        ];
        DB::table('tests')->insert($param);
    }
}
