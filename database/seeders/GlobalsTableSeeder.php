<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GlobalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('globals')->insert([
            'data_type' => 'laboratoire',
            'data_cat' => 'pedagogique',
            'cat_name' => 'Laboratoire pedagodique',
            'cat_desc' => '',
        ]);

        DB::table('globals')->insert([
            'data_type' => 'laboratoire',
            'data_cat' => 'recherche',
            'cat_name' => 'Laboratoire recherche',
            'cat_desc' => '',
        ]);
    }
}
