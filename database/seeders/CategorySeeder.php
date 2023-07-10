<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table("categories")->insert([
            "name" => "Eletrônicos",
            "slug" => "eletronicos"
        ]);

        DB::table("categories")->insert([
            "name" => "Bebês",
            "slug" => "bebes"
        ]);

        DB::table("categories")->insert([
            "name" => "Carros",
            "slug" => "carros"
        ]);

        DB::table("categories")->insert([
            "name" => "Móveis",
            "slug" => "moveis"
        ]);

        DB::table("categories")->insert([
            "name" => "Roupas",
            "slug" => "roupas"
        ]);
    }
}
