<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MartyrsSeeder extends Seeder
{
    public function run()
    {
        // Xóa dữ liệu cũ trong bảng trước khi thêm dữ liệu mới
        // DB::table('martyrs')->truncate();

        // Dữ liệu mẫu cho bảng "Martyrs"
        $martyrs = [
            [
                'full_name' => 'Nguyễn Văn A',
                'date_of_birth' => '1990-01-15',
                'rank' => 'Binh nhất',
                'unit' => 'Đơn vị A',
                'position' => 'Chức vụ A',
                'date_of_sacrifice' => '2015-03-20',
                'grave_location_id' => 1, 
                'hometowns'=>"Bình Phước"
            ],
            [
                'full_name' => 'Trần Thị B',
                'date_of_birth' => '1985-05-10',
                'rank' => 'Binh nhì',
                'unit' => 'Đơn vị B',
                'position' => 'Chức vụ B',
                'date_of_sacrifice' => '2009-11-03',
                'grave_location_id' => 2, 
                'hometowns'=>"Đồng Tháp"
            ],
        ];

        // Thêm dữ liệu vào bảng "Martyrs"
        DB::table('martyrs')->insert($martyrs);
    }
}
