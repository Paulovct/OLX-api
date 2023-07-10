<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\StateSeeder;


class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
       $this->call([
            StateSeeder::class,
            CategorySeeder::class
       ]);
    }
}
