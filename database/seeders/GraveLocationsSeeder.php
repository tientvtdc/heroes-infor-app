<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GraveLocationsSeeder extends Seeder
{
    public function run()
    {
        // DB::table('grave_locations')->truncate();

        $graveLocations = [
            [
                'grave_number' => '0',
                'grave_row' => '1',
                'grave_lot' => '1',
                'grave_area' => 'A',
                'other_info' => 'Thông tin mẫu cho lô mộ 1',
                'grave_type' => 'Loại A',
                'has_remains' => true,
            ],
            [
                'grave_number' => '1',
                'grave_row' => '1',
                'grave_lot' => '1',
                'grave_area' => 'A',
                'other_info' => 'Thông tin mẫu cho lô mộ 2',
                'grave_type' => 'Loại A',
                'has_remains' => true,
            ],
        ];

        DB::table('grave_locations')->insert($graveLocations);
    }
}
