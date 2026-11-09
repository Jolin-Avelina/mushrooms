<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Mushroom;
class MushroomSeeder extends Seeder
{
    public function run()
    {
        // Path to your JSON file
        $jsonFile = base_path('database/data/mushrooms.json');

        // Read and decode the JSON file
        $mushrooms = json_decode(File::get($jsonFile), true);

        // Insert data into the database
        DB::table('mushrooms')->insert($mushrooms);
        Mushroom::where('created_at',NULL)->update(['created_at'=>now(),'updated_at'=>now()]);
    }
}

