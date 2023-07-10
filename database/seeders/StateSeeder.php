<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    public function run(): void
    {
        DB::table("states")->insert([
            "name" => "Rio de Janeiro",
            "slug" => "RJ"
        ]);

        DB::table("states")->insert([
            "name" => "São Paulo",
            "slug" => "SP"
        ]);
    }
}
