<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            \Database\Seeders\Role::class,
            \Database\Seeders\UserSeeder::class,
            \Database\Seeders\contactoSeeder::class,
            \Database\Seeders\periodoSeeder::class
        ]);
        
    }
}
