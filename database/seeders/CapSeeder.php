<?php

namespace Database\Seeders;

use App\Models\Cap;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class CapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Path to your JSON file
        Cap::truncate();
        $jsonFile = base_path('database/data/cap.json');

        // Read and decode the JSON file
        $caps = json_decode(File::get($jsonFile), true);

        // Insert data into the database
        DB::table('caps')->insert($caps);
        Cap::where('created_at',NULL)->update(['created_at'=>now(),'updated_at'=>now()]);
    }
}
