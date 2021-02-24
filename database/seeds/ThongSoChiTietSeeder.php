<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThongSoChiTietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::connection('mysql')->table('thong_so_chi_tiet')->insert([
            ['id' => 1, 'thongso_id' => 1, 'chitiet_id' => 1],  
            ['id' => 2, 'thongso_id' => 1, 'chitiet_id' => 2],  
            ['id' => 3, 'thongso_id' => 2, 'chitiet_id' => 3],  
            ['id' => 4, 'thongso_id' => 2, 'chitiet_id' => 4],  
            ['id' => 5, 'thongso_id' => 2, 'chitiet_id' => 5],  
            ['id' => 6, 'thongso_id' => 2, 'chitiet_id' => 6],  
            ['id' => 7, 'thongso_id' => 2, 'chitiet_id' => 7],  
            ['id' => 8, 'thongso_id' => 3, 'chitiet_id' => 8],  
            ['id' => 9, 'thongso_id' => 3, 'chitiet_id' => 9],  
            ['id' => 10, 'thongso_id' => 3, 'chitiet_id' => 10],  
            ['id' => 11, 'thongso_id' => 5, 'chitiet_id' => 11],  
            ['id' => 12, 'thongso_id' => 5, 'chitiet_id' => 12],  
            ['id' => 13, 'thongso_id' => 5, 'chitiet_id' => 13],  
            ['id' => 14, 'thongso_id' => 5, 'chitiet_id' => 14],  
            ['id' => 15, 'thongso_id' => 6, 'chitiet_id' => 15],  
            ['id' => 16, 'thongso_id' => 6, 'chitiet_id' => 16],  
            ['id' => 17, 'thongso_id' => 6, 'chitiet_id' => 17],  
            ['id' => 18, 'thongso_id' => 4, 'chitiet_id' => 18],  
            ['id' => 19, 'thongso_id' => 4, 'chitiet_id' => 19],    
        ]);
    }
}
