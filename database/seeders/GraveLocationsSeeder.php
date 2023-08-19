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
                'latitude'=>'-33.24413227097652',
                'longitude'=>'-64.89843964576723'
            ],
            [
                'grave_number' => '1',
                'grave_row' => '1',
                'grave_lot' => '1',
                'grave_area' => 'A',
                'other_info' => 'Thông tin mẫu cho lô mộ 2',
                'grave_type' => 'Loại A',
                'has_remains' => true,
                'latitude'=>'-34.12146681321436',
                'longitude'=>'22.99218535423279'
            ],
            [
                'grave_number' => '2',
                'grave_row' => '1',
                'grave_lot' => '1',
                'grave_area' => 'C',
                'other_info' => 'Thông tin mẫu cho lô mộ 3',
                'grave_type' => 'Loại A',
                'has_remains' => true,
                'latitude'=>'28.264517196510898',
                'longitude'=>'48.86718750000001'
            ],
            
            [
                'grave_number' => '2',
                'grave_row' => '4',
                'grave_lot' => '1',
                'grave_area' => 'C',
                'other_info' => 'Thông tin mẫu cho lô mộ 4',
                'grave_type' => 'Loại A',
                'has_remains' => true,
                'latitude'=>'62.58959459710922',
                'longitude'=>'41.13281250000001'
            ],
            
            [
                'grave_number' => '4',
                'grave_row' => '4',
                'grave_lot' => '3',
                'grave_area' => 'D',
                'other_info' => 'Thông tin mẫu cho lô mộ 5',
                'grave_type' => 'Loại A',
                'has_remains' => true,
                'latitude'=>'71.35588770660311',
                'longitude'=>'18.017578125000004'
            ],
            [
                'grave_number' => '3',
                'grave_row' => '1',
                'grave_lot' => '1',
                'grave_area' => 'A',
                'other_info' => 'Thông tin mẫu cho lô mộ 6',
                'grave_type' => 'Loại A',
                'has_remains' => true,
                'latitude'=>'73.15273416947426',
                'longitude'=>'-77.84912109375'
            ],
            [
                'grave_number' => '6',
                'grave_row' => '4',
                'grave_lot' => '2',
                'grave_area' => 'B',
                'other_info' => 'Thông tin mẫu cho lô mộ 7',
                'grave_type' => 'Loại B',
                'has_remains' => true,
                'latitude'=>'-18.025171403136834',
                'longitude'=>'-64.16015625000001'
            ],
            [
                'grave_number' => '3',
                'grave_row' => '2',
                'grave_lot' => '2',
                'grave_area' => 'B',
                'other_info' => 'Thông tin mẫu cho lô mộ 8',
                'grave_type' => 'Loại A',
                'has_remains' => true,
                'latitude'=>'-31.404443033990923',
                'longitude'=>'-42.01171875000001'
            ],
            [
                'grave_number' => '9',
                'grave_row' => '2',
                'grave_lot' => '5',
                'grave_area' => 'C',
                'other_info' => 'Thông tin mẫu cho lô mộ 9',
                'grave_type' => 'Loại A',
                'has_remains' => true,
                'latitude'=>'46.54119556205806',
                'longitude'=>'24.433593750000004'
            ],
            [
                'grave_number' => '7',
                'grave_row' => '2',
                'grave_lot' => '3',
                'grave_area' => 'C',
                'other_info' => 'Thông tin mẫu cho lô mộ 10',
                'grave_type' => 'Loại A',
                'has_remains' => true,
                'latitude'=>'56.16195176619384',
                'longitude'=>'49.74609375000001'
            ],
            
        ];

        DB::table('grave_locations')->insert($graveLocations);
    }
}
