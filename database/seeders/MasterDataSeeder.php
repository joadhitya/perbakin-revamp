<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterDataSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement((string) file_get_contents(database_path('raws/dev/md_provinces.sql')));
        DB::statement((string) file_get_contents(database_path('raws/dev/md_cities.sql')));
        DB::statement((string) file_get_contents(database_path('raws/dev/md_districts.sql')));
    }
}
