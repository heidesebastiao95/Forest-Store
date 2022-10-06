<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert(

            [
                1 => [
                    'name' =>'Admin',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                2 => [
                    'name' =>'Seller',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                3 => [
                    'name' =>'Customer',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
                
            ]
        );

    }
}
