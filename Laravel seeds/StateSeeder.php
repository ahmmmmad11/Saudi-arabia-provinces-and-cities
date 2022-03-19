<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            ['en_name' => 'Riyadh', 'name' => 'منطقة الرياض'],
            ['en_name' => 'Makkah', 'name' => 'منطقة مكة المكرمة'],
            ['en_name' => 'Al-Medina', 'name' => 'منطقة المدينة المنورة'],
            ['en_name' => 'Qassim', 'name' => 'منطقة القصيم'],
            ['en_name' => 'Eastern', 'name' => 'منطقة الشرقية'],
            ['en_name' => 'Aseer', 'name' => 'منطقة عسير'],
            ['en_name' => 'Tabouk', 'name' => 'منطقة تبوك'],
            ['en_name' => 'Hail', 'name' => 'منطقة حائل'],
            ['en_name' => 'Northern Borders', 'name' => 'منطقة الحدود الشمالية'],
            ['en_name' => 'Jazan', 'name' => 'منطقة جازان'],
            ['en_name' => 'Najran', 'name' => 'منطقة نجران'],
            ['en_name' => 'Al-Baha', 'name' => 'منطقة الباحة'],
            ['en_name' => 'Al-Jouf', 'name' => 'منطقة الجوف'],
        ];

        State::insert($states);
        
    }
}
