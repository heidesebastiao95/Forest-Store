<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(

            [
                1 => [
                    'nome' =>'Jorge Dias',
                    'role_id'=> '1',
                    'matricula' => '2023-06-05-ABC',
                    'cpf' => '567-556-333',
                    'salario' => 15.000000,
                    'cargo' => 'Gerente',
                    'email' => 'jorge@gmail.com',
                    'password' => Hash::make('qwertyuiop[]@#$'),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                2 => [
                    'nome' =>'Armando Casemiro',
                    'role_id'=> '2',
                    'matricula' => '2023-06-05-ABC',
                    'cpf' => '467-556-333',
                    'salario' => 15.000000,
                    'cargo' => 'Assistente ',
                    'email' => 'armando@gmail.com',
                    'password' => Hash::make('qwertyuiop[]@#$'),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                3 => [
                    'nome' =>'Marcos Stenio',
                    'role_id'=> '2',
                    'matricula' => '2023-06-05-ABC',
                    'cpf' => '567-556-333',
                    'salario' => 15.000000,
                    'cargo' => 'Desenvolvedor PHP',
                    'email' => 'marcos@gmail.com',
                    'password' => Hash::make('qwertyuiop[]@#$'),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                4 => [
                    'nome' =>'Elisio Domingos',
                    'role_id'=> '2',
                    'matricula' => '2023-06-05-ABC',
                    'cpf' => '567-556-333',
                    'salario' => 15.000000,
                    'cargo' => 'Desenvolvedor Back End',
                    'email' => 'elisio@gmail.com',
                    'password' => Hash::make('qwertyuiop[]@#$'),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                5 => [
                    'nome' =>'Euclides Vagner',
                    'role_id'=> '2',
                    'matricula' => '2023-06-05-ABC',
                    'cpf' => '567-556-333',
                    'salario' => 15.000000,
                    'cargo' => 'Desenvolvedor Back End',
                    'email' => 'euclides@gmail.com',
                    'password' => Hash::make('qwertyuiop[]@#$'),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                6 => [
                    'nome' =>'Wastel Diogo',
                    'role_id'=> '2',
                    'matricula' => '2023-06-05-ABC',
                    'cpf' => '567-556-333',
                    'salario' => 15.000000,
                    'cargo' => 'Desenvolvedor Back End',
                    'email' => 'wastel@gmail.com',
                    'password' => Hash::make('qwertyuiop[]@#$'),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                7 => [
                    'nome' =>'Jairo Jesus',
                    'role_id'=> '2',
                    'matricula' => '2023-06-05-ABC',
                    'cpf' => '567-556-333',
                    'salario' => 15.000000,
                    'cargo' => 'Desenvolvedor Back End',
                    'email' => 'jairo@gmail.com',
                    'password' => Hash::make('qwertyuiop[]@#$'),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                8 => [
                    'nome' =>'Pedro Soares',
                    'role_id'=> '2',
                    'matricula' => '2023-06-05-ABC',
                    'cpf' => '567-556-333',
                    'salario' => 15.000000,
                    'cargo' => 'Desenvolvedor Back End',
                    'email' => 'pedro@gmail.com',
                    'password' => Hash::make('qwertyuiop[]@#$'),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                9 => [
                    'nome' =>'Gerlson Solano',
                    'role_id'=> '2',
                    'matricula' => '2023-06-05-ABC',
                    'cpf' => '567-556-333',
                    'salario' => 15.000000,
                    'cargo' => 'Desenvolvedor Back End',
                    'email' => 'gelson@gmail.com',
                    'password' => Hash::make('qwertyuiop[]@#$'),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                10 => [
                    'nome' =>'Livander Geovani',
                    'role_id'=> '2',
                    'matricula' => '2023-06-05-ABC',
                    'cpf' => '567-556-333',
                    'salario' => 15.000000,
                    'cargo' => 'Desenvolvedor Back End',
                    'email' => 'livander@gmail.com',
                    'password' => Hash::make('qwertyuiop[]@#$'),
                    'created_at' => now(),
                    'updated_at' => now()
                ]
                
            ]
        );
    }
}
