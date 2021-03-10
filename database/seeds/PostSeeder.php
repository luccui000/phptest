<?php

use App\Post;
use Illuminate\Database\Seeder; 
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = []; 
        for($i = 0; $i < 50000; $i++) {
            $data[] = [ 
                'title' => Str::random(10),
                'content' => Str::random(30),
                'active'  => random_int(0, 1),
                'created_at'  => now()->toDateTimeString(),
                'updated_at'  => now()->toDateTimeString(),
            ];
        }
        $chunks = array_chunk($data, 5000);
        foreach($chunks as $chunk) {
            Post::insert($chunk);
        }
    }
}
