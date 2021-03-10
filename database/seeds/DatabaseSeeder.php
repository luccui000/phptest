<?php
 
use Illuminate\Database\Seeder;  

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(SanPhamSeeder::class);
        // $this->call(ThongSoSeeder::class);
        // $this->call(ChiTietSeeder::class);
        // $this->call(SanPhamThongSoSeeder::class);
        // $this->call(ThongSoChiTietSeeder::class); 
        $this->call(PostSeeder::class); 
    }
}
