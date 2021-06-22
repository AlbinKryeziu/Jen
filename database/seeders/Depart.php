<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Depart extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departs')->insert([
            'depart' => 'Allergy and immunology',
            
        ]);
        DB::table('departs')->insert([
            'depart' => 'Anesthesiology',
            
        ]);
        DB::table('departs')->insert([
            'depart' => 'Dermatology',
            
        ]);
        DB::table('departs')->insert([
            'depart' => 'Diagnostic radiology',
            
        ]);
        DB::table('departs')->insert([
            'depart' => 'Emergency medicine',
            
        ]);
        DB::table('departs')->insert([
            'depart' => 'Family medicine',
            
        ]);
        DB::table('departs')->insert([
            'depart' => 'Internal medicine',
            
        ]);
        DB::table('departs')->insert([
            'depart' => 'Medical genetics',
            
        ]);
        DB::table('departs')->insert([
            'depart' => 'Neurology',
            
        ]);
        DB::table('departs')->insert([
            'depart' => 'Nuclear medicine',
            
        ]);
        DB::table('departs')->insert([
            'depart' => 'Obstetrics and gynecology',
            
        ]);
        DB::table('departs')->insert([
            'depart' => 'Ophthalmology',
            
        ]);
        DB::table('departs')->insert([
            'depart' => 'Pathology',
            
        ]);
        DB::table('departs')->insert([
            'depart' => 'Pediatrics',
            
        ]);
        DB::table('departs')->insert([
            'depart' => 'Physical medicine and rehabilitation',
            
        ]);
        DB::table('departs')->insert([
            'depart' => 'Preventive medicine',
            
        ]);
        DB::table('departs')->insert([
            'depart' => 'Psychiatry',
            
        ]); DB::table('departs')->insert([
            'depart' => 'Radiation oncology',
            
        ]);
        DB::table('departs')->insert([
            'depart' => 'Surgery',
            
        ]);
        DB::table('departs')->insert([
            'depart' => 'Urology
            ',
            
        ]);

        
    }
}
