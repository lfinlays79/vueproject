<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            'name' => Str::random(15),
            'dosage' => 4       
        ]);
        DB::table('medicines')->insert([
            'name' => Str::random(15),
            'dosage' => 43      
        ]);
        DB::table('medicines')->insert([
            'name' => Str::random(15),
            'dosage' => 2      
        ]);
        DB::table('medicines')->insert([
            'name' => Str::random(15),
            'dosage' => 3      
        ]);
    }
}
