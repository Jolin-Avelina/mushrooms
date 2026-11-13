<?php

namespace Database\Seeders;

use App\Models\Stem;
use DB;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Path to your JSON file
        Stem::truncate();
        $jsonFile = base_path('database/data/stem.json');

        // Read and decode the JSON file
        $caps = json_decode(File::get($jsonFile), true);

        // Insert data into the database
        DB::table('stems')->insert($caps);
        Stem::where('created_at',NULL)->update(['created_at'=>now(),'updated_at'=>now()]);
    }
}
