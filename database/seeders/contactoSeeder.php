<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class contactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contatos')->insert(

            [
                1 => [
                    'user_id' =>'1',
                    'telefone' =>'934-955-664',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                2 => [
                    'user_id' =>'2',
                    'telefone' =>'634-955-664',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                3 => [
                    'user_id' =>'3',
                    'telefone' =>'334-955-664',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                4 => [
                    'user_id' =>'4',
                    'telefone' =>'434-955-664',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                5 => [
                    'user_id' =>'5',
                    'telefone' =>'534-955-664',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                6 => [
                    'user_id' =>'6',
                    'telefone' =>'834-955-664',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                7 => [
                    'user_id' =>'7',
                    'telefone' =>'734-955-664',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                8 => [
                    'user_id' =>'8',
                    'telefone' =>'364-955-664',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                9 => [
                    'user_id' =>'9',
                    'telefone' =>'114-955-664',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                10 => [
                    'user_id' =>'10',
                    'telefone' =>'234-955-664',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
                
            ]
        );
    }
}
