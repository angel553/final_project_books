<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::factory()->times(2)->create(); 
        
        //Book::factory()->hastags(1, ['tag_id' => '1'])->create();
        
        /* $tags = App\Tag::all();*/        
    }
}
