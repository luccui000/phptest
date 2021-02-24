<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql')->table('chi_tiet')->insert([
            ['id' => 1, 'ten' => 'Công Nghệ Màn Hình', 'giatri' => 'Super Amoled'],
            ['id' => 2, 'ten' => 'Độ Phân Giải', 'giatri' => 'Full HD+'],
            ['id' => 3, 'ten' => 'Độ phân giải', 'giatri' => 'Chính 12 MP & Phụ 64 MP, 12 MP'],
            ['id' => 4, 'ten' => 'Quay phim', 'giatri' => 'FullHD 1080p@240fps'],
            ['id' => 5, 'ten' => 'Quay phim', 'giatri' => 'FullHD 1080p@120fps'],
            ['id' => 6, 'ten' => 'Quay phim', 'giatri' => 'FullHD 1080p@60fps'],
            ['id' => 7, 'ten' => 'Quay phim', 'giatri' => '4K 2160p@60fps'],
            ['id' => 8, 'ten' => 'Độ phân giải', 'giatri' => 'Chính 12 MP & Phụ 64 MP, 12 MP'],
            ['id' => 9, 'ten' => 'Tính năng', 'giatri' => 'Góc Siêu rộng'],
            ['id' => 10, 'ten' => 'Tính năng', 'giatri' => 'Góc rộng'],
            ['id' => 11, 'ten' => 'Hệ Điều Hành', 'giatri' => 'Android 11'],
            ['id' => 12, 'ten' => 'Chip xử lý (CPU)', 'giatri' => 'Exynos 2100 8 nhân'],
            ['id' => 13, 'ten' => 'Tốc độ CPU', 'giatri' => '1 nhân 2.9 GHz, 3 nhân 2.8 GHz & 4 nhân 2.2 GHz'],
            ['id' => 14, 'ten' => 'Chip đồ họa (GPU)', 'giatri' => 'Mali-G78 MP14'],
            ['id' => 15, 'ten' => 'RAM', 'giatri' => '4GB/6GB'],
            ['id' => 16, 'ten' => 'Bộ nhớ trong	', 'giatri' => '128GB/256GB'],
            ['id' => 17, 'ten' => 'Thẻ nhớ ngoài', 'giatri' => 'Không'],
            ['id' => 18, 'ten' => 'Loại Pin', 'giatri' => 'Không'],
            ['id' => 19, 'ten' => 'Dung Lượng Pin', 'giatri' => 'Công nghệ pin'],
        ]);
    }
}
