<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamThongSoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql')->table('san_pham_thong_so')->insert([ 
            ['id' => 1,'sanpham_id' => 1, 'thongso_id' => 1],
            ['id' => 2,'sanpham_id' => 1, 'thongso_id' => 2],
            ['id' => 3,'sanpham_id' => 1, 'thongso_id' => 3],
            ['id' => 4,'sanpham_id' => 1, 'thongso_id' => 4],
            ['id' => 5,'sanpham_id' => 1, 'thongso_id' => 5],
            ['id' => 6,'sanpham_id' => 2, 'thongso_id' => 1],
            ['id' => 7,'sanpham_id' => 2, 'thongso_id' => 4],
            ['id' => 8,'sanpham_id' => 2, 'thongso_id' => 5],
            ['id' => 9,'sanpham_id' => 3, 'thongso_id' => 1],
            ['id' => 10,'sanpham_id' => 3, 'thongso_id' => 2],
            ['id' => 11,'sanpham_id' => 3, 'thongso_id' => 5],
            ['id' => 12,'sanpham_id' => 4, 'thongso_id' => 4],
            ['id' => 13,'sanpham_id' => 5, 'thongso_id' => 1],
            ['id' => 14,'sanpham_id' => 5, 'thongso_id' => 3],
            ['id' => 15,'sanpham_id' => 5, 'thongso_id' => 4],
            ['id' => 16,'sanpham_id' => 5, 'thongso_id' => 5],
        ]);
    }
}
