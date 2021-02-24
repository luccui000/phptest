<?php
 

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::connection('mysql')->table('san_pham')->insert([
            ['id' => 1, 'tensanpham' => 'Điện Thoại', ],
            ['id' => 2, 'tensanpham' => 'Máy Tính'],
            ['id' => 3, 'tensanpham' => 'Smart Watch'],
            ['id' => 4, 'tensanpham' => 'Phụ Kiện'],
            ['id' => 5, 'tensanpham' => 'Camera'],
        ]);
    }
}
