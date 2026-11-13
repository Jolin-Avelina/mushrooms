<?php

namespace Database\Seeders;

use App\Models\Gill;
use DB;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Path to your JSON file
        Gill::truncate();
        $jsonFile = base_path('database/data/gill.json');

        // Read and decode the JSON file
        $caps = json_decode(File::get($jsonFile), true);

        // Insert data into the database
        DB::table('gills')->insert($caps);
        Gill::where('created_at',NULL)->update(['created_at'=>now(),'updated_at'=>now()]);
    }
}
