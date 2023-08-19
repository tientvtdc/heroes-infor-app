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
            [
                'full_name' => 'Hồ Văn C',
                'date_of_birth' => '1987-05-10',
                'rank' => 'Binh nhì',
                'unit' => 'Đơn vị C',
                'position' => 'Chức vụ B',
                'date_of_sacrifice' => '2000-10-3',
                'grave_location_id' => 3, 
                'hometowns'=>"Ninh Thuận"
            ],
            [
                'full_name' => 'Nguyễn Thị D',
                'date_of_birth' => '1950-04-19',
                'rank' => 'Binh nhì',
                'unit' => 'Đơn vị D',
                'position' => 'Chức vụ A',
                'date_of_sacrifice' => '1998-01-23',
                'grave_location_id' => 4, 
                'hometowns'=>"Bình Định"
            ],
            [
                'full_name' => 'Trần Văn A2',
                'date_of_birth' => '1960-04-19',
                'rank' => 'Binh nhì',
                'unit' => 'Đơn vị B',
                'position' => 'Chức vụ A',
                'date_of_sacrifice' => '1995-01-23',
                'grave_location_id' => 5, 
                'hometowns'=>"Bình Định"
            ],
            [
                'full_name' => 'Trần Văn C',
                'date_of_birth' => '1958-06-19',
                'rank' => 'Binh nhì',
                'unit' => 'Đơn vị B',
                'position' => 'Chức vụ A',
                'date_of_sacrifice' => '1990-06-23',
                'grave_location_id' => 6, 
                'hometowns'=>"Huế"
            ],
            [
                'full_name' => 'Cao Thị H',
                'date_of_birth' => '1960-06-19',
                'rank' => 'Binh nhì',
                'unit' => 'Đơn vị B',
                'position' => 'Chức vụ A',
                'date_of_sacrifice' => '1992-06-23',
                'grave_location_id' => 7, 
                'hometowns'=>"Huế"
            ],
            [
                'full_name' => 'Hoàng Văn C',
                'date_of_birth' => '1955-04-19',
                'rank' => 'Binh nhì',
                'unit' => 'Đơn vị B',
                'position' => 'Chức vụ A',
                'date_of_sacrifice' => '1990-05-12',
                'grave_location_id' => 8, 
                'hometowns'=>"Đà Nẵng"
            ],
            [
                'full_name' => 'Hoàng Văn D',
                'date_of_birth' => '1955-04-02',
                'rank' => 'Binh nhất',
                'unit' => 'Đơn vị C',
                'position' => 'Chức vụ A',
                'date_of_sacrifice' => '1994-05-12',
                'grave_location_id' => 9, 
                'hometowns'=>"Đà Nẵng"
            ],
            [
                'full_name' => 'Đinh Văn D',
                'date_of_birth' => '1965-04-02',
                'rank' => 'Binh nhất',
                'unit' => 'Đơn vị C',
                'position' => 'Chức vụ A',
                'date_of_sacrifice' => '1995-05-12',
                'grave_location_id' => 10, 
                'hometowns'=>"Long An"
            ],
        ];

        // Thêm dữ liệu vào bảng "Martyrs"
        DB::table('martyrs')->insert($martyrs);
    }
}
