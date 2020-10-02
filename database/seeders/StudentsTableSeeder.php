<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('students')->count()===0){
            DB::table('students')->insert([
                [
                    'name' => 'Nguyen Van A',
                    'phone' => '02391232311',
                    'age' => 20,
                    'gender' => 1,
                    'address' => 'Ha Noi',
                    'is_active' => true,
                ],
                [
                    'name' => 'Nguyen Van A',
                    'phone' => '02391232311',
                    'age' => 20,
                    'gender' => 0,
                    'address' => 'Ha Noi',
                    'is_active' => true,    
                ],
                [
                    'name' => 'Nguyen Van c',
                    'phone' => '02391232311',
                    'age' => 20,
                    'gender' => 0,
                    'is_active' => true,
                ],
            ]);
        } else {
            echo 'Bang student da co du lieu' . PHP_EOL;
        }
    }
}
