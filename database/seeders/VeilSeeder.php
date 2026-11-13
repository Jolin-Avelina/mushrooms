<?php

namespace Database\Seeders;

use App\Models\Veil;
use DB;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VeilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Path to your JSON file
        Veil::truncate();
        $jsonFile = base_path('database/data/veil.json');

        // Read and decode the JSON file
        $caps = json_decode(File::get($jsonFile), true);

        // Insert data into the database
        DB::table('veils')->insert($caps);
        Veil::where('created_at',NULL)->update(['created_at'=>now(),'updated_at'=>now()]);
    }
}
