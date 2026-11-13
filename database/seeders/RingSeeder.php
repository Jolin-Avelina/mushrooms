<?php

namespace Database\Seeders;

use App\Models\Ring;
use DB;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Path to your JSON file
        Ring::truncate();
        $jsonFile = base_path('database/data/ring.json');

        // Read and decode the JSON file
        $caps = json_decode(File::get($jsonFile), true);

        // Insert data into the database
        DB::table('rings')->insert($caps);
        Ring::where('created_at',NULL)->update(['created_at'=>now(),'updated_at'=>now()]);
    }
}
