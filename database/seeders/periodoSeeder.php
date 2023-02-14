<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class periodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periodos')->insert(

            [
                1 => [
                    'user_id' =>'1',
                    'data_inicio'=> now(),
                    'data_fim' =>date_format(now(),'2023-06-05'),
                    'ano' => now(),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                2 => [
                    'user_id' =>'2',
                    'data_inicio'=> now(),
                    'data_fim' =>date_format(now(),'2023-06-05'),
                    'ano' => now(),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                3 => [
                    'user_id' =>'3',
                    'data_inicio'=> now(),
                    'data_fim' =>date_format(now(),'2023-06-05'),
                    'ano' => now(),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                4 => [
                    'user_id' =>'4',
                    'data_inicio'=> now(),
                    'data_fim' =>date_format(now(),'2023-06-05'),
                    'ano' => now(),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                5 => [
                    'user_id' =>'5',
                    'data_inicio'=> now(),
                    'data_fim' =>date_format(now(),'2023-06-05'),
                    'ano' => now(),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                6 => [
                    'user_id' =>'6',
                    'data_inicio'=> now(),
                    'data_fim' =>date_format(now(),'2023-06-05'),
                    'ano' => now(),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                7 => [
                    'user_id' =>'7',
                    'data_inicio'=> now(),
                    'data_fim' =>date_format(now(),'2023-06-05'),
                    'ano' => now(),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                8 => [
                    'user_id' =>'8',
                    'data_inicio'=> now(),
                    'data_fim' =>date_format(now(),'2023-06-05'),
                    'ano' => now(),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                9 => [
                    'user_id' =>'9',
                    'data_inicio'=> now(),
                    'data_fim' =>date_format(now(),'2023-06-05'),
                    'ano' => now(),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                10 => [
                    'user_id' =>'10',
                    'data_inicio'=> now(),
                    'data_fim' =>date_format(now(),'2023-06-05'),
                    'ano' => now(),
                    'created_at' => now(),
                    'updated_at' => now()
                ]
                
            ]
        );
    }
}
