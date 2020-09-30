<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('subjects')->count()===0){
            DB::table('subjects')->insert([
                [
                    'name' => 'Toan',
                    'time' => 2020/10/1,
                    'is_active' => true,
                ],
                [
                    'name' => 'Van',
                    'time' => 2020/10/1,
                    'is_active' => true,
                ],
            ]);
        } else {
            echo 'Bang subjects da co du lieu' . PHP_EOL;
        }
    }
}
