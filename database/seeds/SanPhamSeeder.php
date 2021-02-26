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
            ['id' => 1, 'tensanpham' => 'Điện Thoại', 'masanpham' => 'DT01A211', 'mota' => 'Iphone 12 Promax'],
            ['id' => 2, 'tensanpham' => 'Máy Tính', 'masanpham' => 'MT23AW', 'mota' => 'Dell Latitude E6540'],
            ['id' => 3, 'tensanpham' => 'Smart Watch', 'masanpham' => 'SM23SW', 'mota' => 'Apple Watch Series 3'],
            ['id' => 4, 'tensanpham' => 'Phụ Kiện', 'masanpham' => 'PK21AS', 'mota' => 'Ốp Lưng Pikachu'],
            ['id' => 5, 'tensanpham' => 'Camera', 'masanpham' => 'CM12AG', 'mota' => 'Camera Canon'],
        ]);
    }
}
