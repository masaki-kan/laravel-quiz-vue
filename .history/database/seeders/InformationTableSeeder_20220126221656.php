<?php

use Illuminate\Database\Seeders;
use Illuminate\Support\Facades\DB;

class InformationTableSeeder extends Seeders
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('informations')->truncate();

        $lists = [
            [
                'information' => '最初のお知らせです',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($lists as $list) {
            DB::table('informations')->insert($list);
        }
    }
}
