<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThongSoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql')->table('thong_so')->insert([
            // ['id' => 1, 'tenthongso' => 'Màn Hình' ],
            // ['id' => 2, 'tenthongso' => 'Camera Trước'],
            // ['id' => 3, 'tenthongso' => 'Camera Sau'],
            // ['id' => 5, 'tenthongso' => 'Hệ Điều Hành'],
            // ['id' => 4, 'tenthongso' => 'Phụ Kiện'],
            ['id' => 6, 'tenthongso' => 'Bộ Nhớ'],
        ]);
    }
}
